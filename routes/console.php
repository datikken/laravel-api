<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('spider_created', function () {
//    $this->comment(Inspiring::quote());
})->purpose('Parse all pages from a given link.');
