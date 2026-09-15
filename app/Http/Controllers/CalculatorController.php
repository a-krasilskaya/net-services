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

    private function calculatePrice(string $calculator, array $data): float
    {
        $rates = CalculatorRate::where('calculator', $calculator)->pluck('price', 'key');

        if ($calculator === 'sks') {
            $workstations = (int) ($data['workstations'] ?? 0);
            $outletsPerWorkstation = (int) ($data['outlets_per_workstation'] ?? 1);
            $category = $data['category'] ?? '5e';

            $totalOutlets = $workstations * $outletsPerWorkstation;

            $price = ($workstations * $rates['per_workstation'])
                + ($totalOutlets * $rates['per_outlet']);

            if ($category === '6') {
                $price += $price * ($rates['category_6_multiplier'] / 100);
            }

            return round($price, 2);
        }

        return 0;
    }
}