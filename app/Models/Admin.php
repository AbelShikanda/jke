<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $guard = 'admin';
    protected $fillable = [
        'uuid',
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'is_admin',
        'is_mod',
        'is_staff',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
