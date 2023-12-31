<?php

namespace App\Models\Main;

use App\Http\Lib\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function scopeEntities($query, $entities)
    {
        Helper::entities($query, $entities);
    }
}
