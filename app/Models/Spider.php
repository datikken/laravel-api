<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;
use Symfony\Component\DomCrawler\Crawler;

class Spider extends Model
{
    use HasFactory;

    private $client;

    protected $fillable = [
        'url'
    ];

    public function getHtml($url)
    {
        return file_get_contents($url);
    }

    public function createClient()
    {
        return $this->client = new Client();
    }

    public function sendArrAsJson($url, $arr)
    {
        $this->createClient();
        $response = $this->client->request(
            'POST',
            $url,
            [
                'json' => $arr,
            ]
        );
        return $response->getBody();
    }

    public function getAllLinksFromHtml()
    {
        $crawler = new Crawler($this->getHtml($this->url));
        $links = $crawler->filter('a')->each(function (Crawler $node, $i) {
            return [
                'class' => $node->attr('class'),
                'text' => $node->text(),
                'href' => $node->attr('href')
            ];
        });

        return $links;
    }

    public function getAsync()
    {
        $this->createClient();
        $promise = $this->client->requestAsync(
            'GET',
            $this->url
        );
        $promise->then(
            function (Response $resp) {
                echo $resp->getBody()->getContents();
            },
            function (RequestException $e) {
                echo $e->getMessage();
            }
        );
        return $promise->wait();
    }
}
