<?php

namespace App\Models;

use App\Http\Traits\CrawlTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    use HasFactory, CrawlTrait;

    protected $fillable = [
        'spider_id',
        'link',
        'html',
    ];

    public function spider()
    {
        return $this->belongsTo(Spider::class);
    }
}
