<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spider extends Model
{
    use HasFactory;

    protected $fillable = [
        'url'
    ];

   public function victims()
   {
       return $this->hasMany(Victim::class);
   }
}
