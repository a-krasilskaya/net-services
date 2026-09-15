<?php

namespace App\Filament\Resources\CalculatorRates\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class CalculatorRateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('label')
                ->label('Название параметра')
                ->disabled(),
            TextInput::make('price')
                ->label('Цена')
                ->numeric()
                ->required(),
            TextInput::make('unit')
                ->label('Единица измерения')
                ->disabled(),
        ]);
    }
}
