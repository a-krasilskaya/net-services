<?php

namespace App\Filament\Resources\CalculatorRates;

use App\Filament\Resources\CalculatorRates\Pages\CreateCalculatorRate;
use App\Filament\Resources\CalculatorRates\Pages\EditCalculatorRate;
use App\Filament\Resources\CalculatorRates\Pages\ListCalculatorRates;
use App\Filament\Resources\CalculatorRates\Schemas\CalculatorRateForm;
use App\Filament\Resources\CalculatorRates\Tables\CalculatorRatesTable;
use App\Models\CalculatorRate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CalculatorRateResource extends Resource
{
    protected static ?string $model = CalculatorRate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'label';

    public static function form(Schema $schema): Schema
    {
        return CalculatorRateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CalculatorRatesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCalculatorRates::route('/'),
            'create' => CreateCalculatorRate::route('/create'),
            'edit' => EditCalculatorRate::route('/{record}/edit'),
        ];
    }
}
