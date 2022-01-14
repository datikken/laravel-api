<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

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

    public function sendJson($url, $arr)
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

    public function getAsync()
    {
        $this->createClient();
        $promise = $this->client->requestAsync(
            'GET',
            $this->url
        );

        $promise->then(
            function (Response $resp) {
                echo $resp->getBody();
            },
            function (RequestException $e) {
                echo $e->getMessage();
            }
        );
        return $promise->wait();
    }
}
