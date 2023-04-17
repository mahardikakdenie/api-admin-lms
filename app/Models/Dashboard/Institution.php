<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    public static function scopeGeneratedSlug($query, $slug)
    {
        Helper::generateSlug($query, $slug);
    }

    public function scopeEntities($query, $entities)
    {
        Helper::entities($query, $entities);
    }
}
