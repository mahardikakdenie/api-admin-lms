<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use App\Models\UserHaveInstitution;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function scopeEntities($query, $entities)
    {
        return Helper::entities($query, $entities);
    }

    public function institution()
    {
        return $this->hasMany(UserHaveInstitution::class, 'user_id');
    }
}
