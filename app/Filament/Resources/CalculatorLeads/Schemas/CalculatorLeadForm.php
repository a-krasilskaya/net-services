<?php

namespace App\Filament\Resources\CalculatorLeads\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\KeyValue;

class CalculatorLeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('calculator')
                    ->label('Калькулятор')
                    ->disabled(),
                KeyValue::make('input_data')
                    ->label('Введённые данные')
                    ->disabled(),
                TextInput::make('calculated_price')
                    ->label('Посчитанная цена')
                    ->disabled(),
                TextInput::make('name')
                    ->label('Имя'),
                TextInput::make('phone')
                    ->label('Телефон'),
                TextInput::make('email')
                    ->label('Email'),
            ]);
    }
}
