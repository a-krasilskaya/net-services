<?php

namespace App\Filament\Resources\CalculatorLeads;

use App\Filament\Resources\CalculatorLeads\Pages\CreateCalculatorLead;
use App\Filament\Resources\CalculatorLeads\Pages\EditCalculatorLead;
use App\Filament\Resources\CalculatorLeads\Pages\ListCalculatorLeads;
use App\Filament\Resources\CalculatorLeads\Schemas\CalculatorLeadForm;
use App\Filament\Resources\CalculatorLeads\Tables\CalculatorLeadsTable;
use App\Models\CalculatorLead;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CalculatorLeadResource extends Resource
{
    protected static ?string $model = CalculatorLead::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CalculatorLeadForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CalculatorLeadsTable::configure($table);
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
            'index' => ListCalculatorLeads::route('/'),
            'create' => CreateCalculatorLead::route('/create'),
            'edit' => EditCalculatorLead::route('/{record}/edit'),
        ];
    }
}
