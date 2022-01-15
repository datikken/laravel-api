<?php

use Illuminate\Support\Facades\Route;
use App\Models\Spider;
use Inertia\Inertia;

Route::get('/', function () {
    $url = 'https://www.jamieoliver.com';
    $spider = new Spider(['url' => $url]);
//    $spider->getAsync();
    $html = $spider->getHtml($spider->url);
    $links = $spider->getAllLinksFromHtml();
    $images = $spider->getAllImagesFromHtml();
    dd($images);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
