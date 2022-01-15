<?php

namespace App\Http\Controllers;

use App\Models\Spider;
use App\Models\Victim;

class VictimController extends Controller
{
    public function index()
    {
        $url = 'https://www.jamieoliver.com';
        $spider = Spider::firstOrCreate(['url' => $url]);
        $victim = Victim::firstOrCreate([
            'spider_id' => $spider->id,
            'link' => $spider->url
        ]);

        $links = $victim->getAllImagesFromHtml();

        dump($links);
    }
}
