<?php

use App\Models\Section;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $sections = Section::all();
        return view('dashboard', compact('sections'));
    })->name('dashboard');
});
