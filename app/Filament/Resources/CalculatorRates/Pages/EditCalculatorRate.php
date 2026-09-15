<?php

namespace App\Filament\Resources\CalculatorRates\Pages;

use App\Filament\Resources\CalculatorRates\CalculatorRateResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCalculatorRate extends EditRecord
{
    protected static string $resource = CalculatorRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
