<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('projects', function () {
    return Inertia::render('Projects');
})->name('projects');

Route::get('contact', function () {
    return Inertia::render('Contact');
})->name('contact');

require __DIR__.'/settings.php';
