<?php

namespace App\Models;

use App\Http\Traits\CrawlTrait;
use App\Http\Traits\DownloadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\DomCrawler\Crawler;

class Victim extends Model
{
    use HasFactory, CrawlTrait, DownloadTrait;

    protected $fillable = [
        'spider_id',
        'link',
        'html',
        'server_status'
    ];

    public function createCrawler()
    {
        return $this->crawler = new Crawler($this->getHtml($this->link));
    }

    public function getAllImagesFromHtml()
    {
        $this->createCrawler();
        $images = $this->crawler->filter('img')->each(function (Crawler $node, $i) {
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
        $this->createCrawler();
        $links = $this->crawler->filter('a')->each(function (Crawler $node, $i) {
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

    public function spider()
    {
        return $this->belongsTo(Spider::class);
    }
}
