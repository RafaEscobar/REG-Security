<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\SectionController;
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
    Route::resource('sections', SectionController::class);
    Route::resource('access', EntryController::class);
    Route::get('/dashboard', function () {
        $sections = Section::orderBy('created_at', 'desc')->paginate(12);
        $tags = Tag::all()->pluck('name', 'id');
        return view('dashboard', compact('sections', 'tags'));
    })->name('dashboard');
});
