<?php

namespace App\Filament\Resources\CalculatorLeads\Pages;

use App\Filament\Resources\CalculatorLeads\CalculatorLeadResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCalculatorLead extends EditRecord
{
    protected static string $resource = CalculatorLeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
