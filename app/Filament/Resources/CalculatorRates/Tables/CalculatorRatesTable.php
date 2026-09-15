<?php

namespace App\Filament\Resources\CalculatorRates\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;

class CalculatorRatesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('calculator')
                    ->label('Калькулятор')
                    ->badge(),
                TextColumn::make('label')
                    ->label('Параметр'),
                TextInputColumn::make('price')
                    ->label('Цена')
                    ->type('number'),
                TextColumn::make('unit')
                    ->label('Ед. измерения'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
