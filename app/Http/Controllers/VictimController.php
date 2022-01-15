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
        $victim->getHtml($spider->url);
        $victim->save();
        echo $victim->html;
////    $spider->getAsync();
//    $html = $spider->getHtml($spider->url);
//    $links = $spider->getAllLinksFromHtml();
//    $images = $spider->getAllImagesFromHtml();
//    dd($images);
//        return view('pages.recipes', ['recipes' => $victim]);
    }
}
