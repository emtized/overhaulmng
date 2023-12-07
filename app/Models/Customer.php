<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Uuids;
use Plank\Mediable\Mediable;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Uuids,Mediable,HasRoles;

    protected $guarded = ['id'];


    //casts
    protected $casts = [
        'password' => 'hashed',
    ];

    
    public function getImageAttribute()
    {
        return $this->hasMedia('customer') ?$value = 'storage/'.$this->firstMedia('customer')->directory.'/'.$this->firstMedia('customer')->filename.'.'.$this->firstMedia('customer')->extension : $value = 'images/no-image.jpg';
    }

    public function getImageSmallAttribute()
    {
        return $this->hasMedia('customer') ?$value = 'storage/'.$this->firstMedia('customer')->directory.'/thumb_small_'.$this->firstMedia('customer')->filename.'.'.$this->firstMedia('customer')->extension : $value = 'images/thumb_small_no_image.jpg';
    }
}
