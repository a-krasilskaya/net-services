<?php

namespace App\Filament\Resources\CalculatorRates\Pages;

use App\Filament\Resources\CalculatorRates\CalculatorRateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCalculatorRates extends ListRecords
{
    protected static string $resource = CalculatorRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
