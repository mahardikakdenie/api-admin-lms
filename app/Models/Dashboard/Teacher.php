<?php

namespace App\Models\Dashboard;

use App\Http\Lib\Helper;
use App\Models\UserHaveInstitution;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'users';

    public function scopeEntities($query, $entities)
    {
        return Helper::entities($query, $entities);
    }

    public function scopeSummary($query, $summary)
    {
        Helper::matchField($query, 'status', $summary);
    }

    public function institution()
    {
        return $this->hasOne(UserHaveInstitution::class, 'user_id');
    }
}
