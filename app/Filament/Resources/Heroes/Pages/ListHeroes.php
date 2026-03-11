<?php

namespace App\Filament\Resources\Heroes\Pages;

use App\Filament\Resources\Heroes\HeroResource;
use Filament\Resources\Pages\ListRecords;

class ListHeroes extends ListRecords
{
    protected static string $resource = HeroResource::class;

    public function mount(): void
    {
        $hero = HeroResource::getHero();

        redirect()->to(static::getResource()::getUrl('edit', ['record' => $hero]));
    }
}
