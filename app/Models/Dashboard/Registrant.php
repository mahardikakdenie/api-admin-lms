<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    use HasFactory;

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

    public function scopeEntities($query, $entities)
    {
        Helper::entities($query, $entities);
    }
}
