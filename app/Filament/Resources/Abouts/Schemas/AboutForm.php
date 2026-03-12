<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                Textarea::make('subtitle')
                    ->rows(2),
                Textarea::make('content')
                    ->rows(4),
                Textarea::make('content_2')
                    ->rows(4),
                FileUpload::make('image_1')
                    ->image()
                    ->directory('about'),
                FileUpload::make('image_2')
                    ->image()
                    ->directory('about'),
            ]);
    }
}
