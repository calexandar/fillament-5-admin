<?php

use App\Models\Hero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hero = Hero::first();

    return view('welcome', compact('hero'));
});
