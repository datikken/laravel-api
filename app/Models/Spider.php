<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\DownloadTrait;

class Spider extends Model
{
    use HasFactory, DownloadTrait;

    protected $fillable = [
        'url'
    ];

   public function victims()
   {
       return $this->hasMany(Victim::class);
   }
}
