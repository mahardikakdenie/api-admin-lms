<?php

namespace App\Models\Main;

use App\Http\Lib\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory, SoftDeletes;

    public function users()
    {
        return $this->hasMany(UserHasTodo::class, 'todo_id');
    }

    public function scopeEntities($query, $entities)
    {
        return Helper::entities($query, $entities);
    }
}
