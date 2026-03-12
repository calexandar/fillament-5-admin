<?php

namespace App\Filament\Resources\Abouts\Pages;

use App\Filament\Resources\Abouts\AboutResource;
use App\Models\About;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    public function mount(): void
    {
        $about = About::first();

        if (! $about) {
            $about = About::create([]);
        }

        redirect()->to(static::getResource()::getUrl('edit', ['record' => $about]));
    }
}
