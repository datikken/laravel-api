<?php

use Illuminate\Support\Facades\Route;
use App\Models\Spider;

Route::get('/', function () {
    $url = 'https://www.jamieoliver.com/recipes/rice-recipes/my-singapore-style-fried-rice/';
    $spider = new Spider(['url' => $url]);
//    $spider->getAsync();
    $html = $spider->getHtml($spider->url);
    dd($html);
});
