<?php

use Illuminate\Support\Facades\Route;
use App\Models\Spider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $url = 'https://www.jamieoliver.com/recipes/rice-recipes/my-singapore-style-fried-rice/';

    $spider = new Spider(['url' => 'https://jsonplaceholder.typicode.com/albums/1/photos']);
    $spider->getAsync();

//    return view('welcome');
});
