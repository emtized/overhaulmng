<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Uuids;
use Plank\Mediable\Mediable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Uuids,Mediable,HasRoles;

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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getImageAttribute()
    {
        return $this->hasMedia('user') ?$value = 'storage/'.$this->firstMedia('user')->directory.'/'.$this->firstMedia('user')->filename.'.'.$this->firstMedia('user')->extension : $value = 'images/no-image.jpg';
    }

    public function getImageSmallAttribute()
    {
        return $this->hasMedia('user') ?$value = 'storage/'.$this->firstMedia('user')->directory.'/thumb_small_'.$this->firstMedia('user')->filename.'.'.$this->firstMedia('user')->extension : $value = 'images/thumb_small_no_image.jpg';
    }
}
