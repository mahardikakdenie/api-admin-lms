<?php

namespace App\Models\Cms;

use App\Http\Lib\Helper;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carousel extends Model
{
    use HasFactory, SoftDeletes;

    public function scopeEntities($query, $entities)
    {
        Helper::entities($query, $entities);
    }

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
