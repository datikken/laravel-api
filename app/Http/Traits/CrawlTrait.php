<?php

namespace App\Http\Traits;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

trait CrawlTrait
{
    private $client;
    private $url;

    public function createClient()
    {
        return $this->client = new Client();
    }

    public function getHtml($url)
    {
        $this->html = Http::get($url)->getBody()->getContents();
        return $this->html;
    }

    public function getAllImagesFromHtml()
    {
        $crawler = new Crawler($this->getHtml($this->url));
        $images = $crawler->filter('img')->each(function (Crawler $node, $i) {
            if ($node->attr('src')) {
                return [
                    'src' => $node->attr('src'),
                    'class' => $node->attr('class'),
                    'alt' => $node->attr('alt')
                ];
            }
        });

        return $images;
    }

    public function getAllLinksFromHtml()
    {
        $crawler = new Crawler($this->getHtml($this->url));
        $links = $crawler->filter('a')->each(function (Crawler $node, $i) {
            if ($node->attr('href')) {
                return [
                    'class' => $node->attr('class'),
                    'text' => $node->text(),
                    'href' => $node->attr('href')
                ];
            }
        });

        return $links;
    }
}
