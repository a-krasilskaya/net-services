<?php

namespace App\Filament\Resources\CalculatorLeads\Pages;

use App\Filament\Resources\CalculatorLeads\CalculatorLeadResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCalculatorLeads extends ListRecords
{
    protected static string $resource = CalculatorLeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
