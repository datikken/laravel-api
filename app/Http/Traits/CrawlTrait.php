<?php

namespace App\Http\Traits;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

trait CrawlTrait
{
    private $client;

    public function createClient()
    {
        return $this->client = new Client();
    }

    public function getHtml($url)
    {
        $this->html = Http::get($url)->getBody()->getContents();
        return $this->html;
    }
}
