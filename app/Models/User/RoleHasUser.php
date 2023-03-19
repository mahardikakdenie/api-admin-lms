<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasUser extends Model
{
    use HasFactory;
    protected $table = 'role_has_user';
}
