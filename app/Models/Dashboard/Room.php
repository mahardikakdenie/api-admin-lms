<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function scopeEntities($query, $entities)
    {
        Helper::entities($query, $entities);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
