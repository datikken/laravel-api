<?php

use Illuminate\Support\Facades\Route;
use App\Models\Spider;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

Route::get('/', function () {
    $url = 'https://www.jamieoliver.com/recipes/rice-recipes/my-singapore-style-fried-rice/';
    $spider = new Spider(['url' => $url]);
//    $spider->getAsync();
    $html = $spider->getHtml($spider->url);
    dd($html);
});
/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

require __DIR__.'/auth.php';
