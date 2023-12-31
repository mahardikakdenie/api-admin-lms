<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use App\Models\User;
use App\Models\UserHaveInstitution;
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

    public function teacher()
    {
        return $this->hasMany(UserHaveInstitution::class, 'institution_id');
    }
}
