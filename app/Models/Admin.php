<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $guard = 'admin';
    protected $table = 'admins';

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
