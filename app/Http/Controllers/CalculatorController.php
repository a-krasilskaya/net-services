<?php

namespace App\Http\Controllers;

use App\Models\CalculatorLead;
use App\Models\CalculatorRate;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function estimate(Request $request)
    {
        $price = $this->calculatePrice($request->input('calculator'), $request->all());

        return response()->json(['price' => $price]);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'calculator' => 'required|string',
            'name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
        ]);

        $price = $this->calculatePrice($validated['calculator'], $request->all());

        CalculatorLead::create([
            'calculator' => $validated['calculator'],
            'input_data' => $request->except(['calculator', 'name', 'phone', 'email', '_token']),
            'calculated_price' => $price,
            'name' => $validated['name'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'email' => $validated['email'] ?? null,
        ]);

        return response()->json(['success' => true, 'price' => $price]);
    }

    public function widget(string $type)
    {
        if (! in_array($type, ['sks', 'vols'])) {
            abort(404);
        }

        return view('partials.calculator-' . $type);
    }

    private function calculatePrice(string $calculator, array $data): float
    {
        $rates = CalculatorRate::where('calculator', $calculator)->pluck('price', 'key');

        if ($calculator === 'sks') {
            $workstations = (int) ($data['workstations'] ?? 0);
            $outletsPerWorkstation = (int) ($data['outlets_per_workstation'] ?? 1);
            $powerOutletsPerWorkstation = (int) ($data['power_outlets_per_workstation'] ?? 0);
            $roomArea = (float) ($data['room_area'] ?? 0);
            $roomsCount = (int) ($data['rooms_count'] ?? 1);
            $category = $data['category'] ?? '5e';
            $rackSize = $data['rack_size'] ?? 'none';
            $dropCeiling = $data['drop_ceiling'] ?? 'no';
            $conduitType = $data['conduit_type'] ?? '105x50';

            $totalOutlets = $workstations * $outletsPerWorkstation;

            // Стоимость самой разводки кабеля (учитывает категорию сети)
            $cableCost = ($workstations * $rates['per_workstation'])
                + ($totalOutlets * $rates['per_outlet']);

            if ($category === '6') {
                $cableCost += $cableCost * ($rates['category_6_multiplier'] / 100);
            }

            // Силовые розетки
            $powerCost = $workstations * $powerOutletsPerWorkstation * $rates['per_power_outlet'];

            // Площадь и количество комнат
            $areaCost = $roomArea * $rates['per_sqm'];
            $roomCost = $roomsCount * $rates['per_room'];

            // Стойка
            $rackKey = 'rack_' . $rackSize;
            $rackCost = $rates[$rackKey] ?? 0;

            // Короб (с учётом скидки за разборные потолки)
            $conduitKey = 'conduit_' . $conduitType;
            $conduitCost = $roomsCount * ($rates[$conduitKey] ?? 0);

            if ($dropCeiling === 'yes') {
                $conduitCost -= $conduitCost * ($rates['drop_ceiling_discount'] / 100);
            }

            $price = $cableCost + $powerCost + $areaCost + $roomCost + $rackCost + $conduitCost;

            return round($price, 2);
        }

        return 0;
    }
}