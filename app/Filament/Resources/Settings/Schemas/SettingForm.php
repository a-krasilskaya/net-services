<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hero_title')
                    ->label('Заголовок баннера')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('hero_subtitle')
                    ->label('Подзаголовок баннера')
                    ->required(),
            ]);
    }
}
