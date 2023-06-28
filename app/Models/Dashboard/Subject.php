<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory, SoftDeletes;

    public function scopeEntities($query, $entities)
    {
        return Helper::entities($query, $entities);
    }

    public function scopeSummary($query, $value)
    {
        return Helper::summary($query, $value);
    }
}
