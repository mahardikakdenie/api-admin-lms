<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'medias';

    public function getUrlAttribute()
    {
        if ($this->attributes['url'] != null) {
            return  env('IMAGE_URL', ' http://127.0.0.1:8000/') . $this->attributes['url'];
            // return env('IMAGE_URL', ' https://api.ensiklotari.com/app/') . $this->attributes['url'];
        } else {
            return $this->attributes['url'];
        }
    }
}
