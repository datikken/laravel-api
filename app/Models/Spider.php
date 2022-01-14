<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Spider extends Model
{
    use HasFactory;

    private $client;

    protected $fillable = [
        'url'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function getHtmlByUrl($url)
    {
        $this->client = new Client([
            'base_uri' => $url
        ]);

        dd($this->client);

        return file_get_contents($this->url);
    }
}
