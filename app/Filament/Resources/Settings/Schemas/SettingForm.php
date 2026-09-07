<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Radio;

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
                TextInput::make('services_button_text')
                    ->label('Текст кнопки на карточках услуг')
                    ->required()
                    ->maxLength(50),
                Radio::make('services_link_type')
                    ->label('Что происходит при клике на кнопку')
                    ->options([
                        'page' => 'Переход на отдельную страницу услуги',
                        'popup' => 'Открыть попап с описанием',
                    ])
                    ->default('page')
                    ->required(),
            ]);
    }
}
