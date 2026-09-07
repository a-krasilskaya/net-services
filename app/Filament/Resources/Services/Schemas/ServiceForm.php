<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('title')
                ->label('Название услуги')
                ->required()
                ->maxLength(255),
            RichEditor::make('description')
                ->label('Описание')
                ->required(),
            FileUpload::make('icon')
                ->label('Иконка')
                ->image()
                ->directory('services/icons'),
            FileUpload::make('image')
                ->label('Картинка')
                ->image()
                ->directory('services/images'),
            TextInput::make('image_alt')
                ->label('Alt-текст картинки (для SEO)')
                ->maxLength(255)
                ->helperText('Если оставить пустым — будет использовано название услуги'),
            TextInput::make('order')
                ->label('Порядок сортировки')
                ->numeric()
                ->default(0),
        ]);
    }
}
