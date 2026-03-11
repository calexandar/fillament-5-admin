<?php

namespace App\Filament\Resources\Heroes;

use App\Filament\Resources\Heroes\Pages\EditHero;
use App\Filament\Resources\Heroes\Pages\ListHeroes;
use App\Filament\Resources\Heroes\Schemas\HeroForm;
use App\Filament\Resources\Heroes\Tables\HeroesTable;
use App\Models\Hero;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    protected static bool $shouldRegisterNavigation = true;

    public static function form(Schema $schema): Schema
    {
        return HeroForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroesTable::configure($table);
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
            'index' => ListHeroes::route('/'),
            'edit' => EditHero::route('/{record}'),
        ];
    }

    public static function getHero(): Hero
    {
        return Hero::firstOrCreate(
            [],
            [
                'title' => 'We are experts elevating lives',
                'subtitle' => 'Creating spaces that inspire comfort, elegance, and functionality for modern living.',
                'button_text' => 'Start Your Project',
                'button_link' => '#contact',
                'stat_1_value' => '250',
                'stat_1_label' => 'Projects Completed',
                'stat_2_value' => '90',
                'stat_2_label' => 'Expert Designers',
                'stat_3_value' => '150',
                'stat_3_label' => 'Happy Clients',
            ]
        );
    }
}
