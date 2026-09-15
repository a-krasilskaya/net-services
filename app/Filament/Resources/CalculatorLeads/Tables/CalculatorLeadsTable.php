<?php

namespace App\Filament\Resources\CalculatorLeads\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class CalculatorLeadsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Дата')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
                TextColumn::make('calculator')
                    ->label('Калькулятор')
                    ->badge(),
                TextColumn::make('name')
                    ->label('Имя')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Телефон'),
                TextColumn::make('calculated_price')
                    ->label('Цена')
                    ->money('RUB')
                    ->sortable(),
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
