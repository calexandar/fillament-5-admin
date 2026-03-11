<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('subtitle')
                    ->rows(3),
                TextInput::make('button_text'),
                TextInput::make('button_link'),
                FileUpload::make('background_image')
                    ->image()
                    ->directory('hero'),
                TextInput::make('stat_1_value')
                    ->label('Stat 1 Value'),
                TextInput::make('stat_1_label')
                    ->label('Stat 1 Label'),
                TextInput::make('stat_2_value')
                    ->label('Stat 2 Value'),
                TextInput::make('stat_2_label')
                    ->label('Stat 2 Label'),
                TextInput::make('stat_3_value')
                    ->label('Stat 3 Value'),
                TextInput::make('stat_3_label')
                    ->label('Stat 3 Label'),
            ]);
    }
}
