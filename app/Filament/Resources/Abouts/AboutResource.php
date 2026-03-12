<?php

namespace App\Filament\Resources\Abouts;

use App\Filament\Resources\Abouts\Pages\EditAbout;
use App\Filament\Resources\Abouts\Pages\ListAbouts;
use App\Filament\Resources\Abouts\Schemas\AboutForm;
use App\Filament\Resources\Abouts\Tables\AboutsTable;
use App\Models\About;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;

    protected static ?string $recordTitleAttribute = 'title';

    protected static bool $shouldRegisterNavigation = true;

    public static function form(Schema $schema): Schema
    {
        return AboutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutsTable::configure($table);
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
            'index' => ListAbouts::route('/'),
            'edit' => EditAbout::route('/{record}'),
        ];
    }

    public static function getAbout(): About
    {
        return About::firstOrCreate(
            [],
            [
                'title' => 'Design with purpose. Style with heart.',
                'subtitle' => null,
                'content' => 'We create thoughtfully designed interiors that balance aesthetics, comfort, and functionality. Our philosophy is rooted in understanding how people live and transforming spaces into meaningful environments that elevate everyday life.',
                'content_2' => 'With a deep attention to detail and craftsmanship, our team collaborates closely with clients to design timeless interiors that reflect their vision and lifestyle.',
            ]
        );
    }
}
