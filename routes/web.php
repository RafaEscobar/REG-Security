<?php

use App\Models\Section;
use App\Models\Tag;
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
        $tags = Tag::all()->pluck('name', 'id');
        return view('dashboard', compact('sections', 'tags'));
    })->name('dashboard');
});
