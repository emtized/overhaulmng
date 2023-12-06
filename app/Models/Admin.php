<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuids;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable,Uuids;

    protected $table = "admin_users";
    protected $guarded = ['id'];

    protected $guard = 'admin';











    

    protected $casts = [
        'password' => 'hashed',
    ];
}
