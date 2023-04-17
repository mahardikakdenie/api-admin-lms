<?php

namespace App\Models;

use App\Models\Dashboard\Institution;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHaveInstitution extends Model
{
    use HasFactory;

    protected $table = 'user_have_institutions';

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
