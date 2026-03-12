<?php

use App\Models\About;
use App\Models\Hero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hero = Hero::first();
    $about = About::first();

    return view('welcome', compact('hero', 'about'));
});
