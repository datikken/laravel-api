<?php

namespace App\Http\Controllers;

use App\Models\Spider;
use App\Models\Victim;
use App\Events\SpiderCreatedEvent;

class VictimController extends Controller
{
    public function index()
    {
        SpiderCreatedEvent::dispatch();
//
//        $url = 'https://www.jamieoliver.com';
//        $spider = Spider::firstOrCreate(['url' => $url]);
//        $victim = Victim::firstOrCreate([
//            'spider_id' => $spider->id,
//            'link' => $spider->url
//        ]);
//
//        $links = $victim->getAllImagesFromHtml();
//
//        dump($links);
    }
}
