<?php

namespace App\Models\Main;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasTodo extends Model
{
    use HasFactory;
    protected $table = 'user_has_todo';

    public function data()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
