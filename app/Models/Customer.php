<?php

namespace App\Models;

use App\Models\Bank;
use App\Models\Date;
use App\Traits\Uuids;
use App\Models\Contacts;
use App\Models\Location;
use App\Models\Physical;
use App\Models\Education;
use App\Models\Insurance;
use App\Models\Employment;
use Plank\Mediable\Mediable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function getCartAttribute()
    {
        return $this->hasMedia('cart') ?$value = 'storage/'.$this->firstMedia('cart')->directory.'/'.$this->firstMedia('cart')->filename.'.'.$this->firstMedia('cart')->extension : $value = 'images/no-image.jpg';
    }

    public function getShenaAttribute()
    {
        return $this->hasMedia('shena') ?$value = 'storage/'.$this->firstMedia('shena')->directory.'/'.$this->firstMedia('shena')->filename.'.'.$this->firstMedia('shena')->extension : $value = 'images/no-image.jpg';
    }

    public function getShena2Attribute()
    {
        return $this->hasMedia('shena2') ?$value = 'storage/'.$this->firstMedia('shena2')->directory.'/'.$this->firstMedia('shena2')->filename.'.'.$this->firstMedia('shena2')->extension : $value = 'images/no-image.jpg';
    }

    public function getSoldierAttribute()
    {
        return $this->hasMedia('soldier') ?$value = 'storage/'.$this->firstMedia('soldier')->directory.'/'.$this->firstMedia('soldier')->filename.'.'.$this->firstMedia('soldier')->extension : $value = 'images/no-image.jpg';
    }

    public function getImgAttribute()
    {
        return $this->hasMedia('image') ?$value = 'storage/'.$this->firstMedia('image')->directory.'/'.$this->firstMedia('image')->filename.'.'.$this->firstMedia('image')->extension : $value = 'images/no-image.jpg';
    }

    public function getSmookImageAttribute()
    {
        return $this->hasMedia('smook_image') ?$value = 'storage/'.$this->firstMedia('smook_image')->directory.'/'.$this->firstMedia('smook_image')->filename.'.'.$this->firstMedia('smook_image')->extension : $value = 'images/no-image.jpg';
    }

    public function getPoliceAttribute()
    {
        return $this->hasMedia('police') ?$value = 'storage/'.$this->firstMedia('police')->directory.'/'.$this->firstMedia('police')->filename.'.'.$this->firstMedia('police')->extension : $value = 'images/no-image.jpg';
    }

    public function getDoctorAttribute()
    {
        return $this->hasMedia('doctor') ?$value = 'storage/'.$this->firstMedia('doctor')->directory.'/'.$this->firstMedia('doctor')->filename.'.'.$this->firstMedia('doctor')->extension : $value = 'images/no-image.jpg';
    }

    public function getWorkAttribute()
    {
        return $this->hasMedia('work_image') ?$value = 'storage/'.$this->firstMedia('work_image')->directory.'/'.$this->firstMedia('work_image')->filename.'.'.$this->firstMedia('work_image')->extension : $value = 'images/no-image.jpg';
    }

    public function getEduAttribute()
    {
        return $this->hasMedia('edu_image') ?$value = 'storage/'.$this->firstMedia('edu_image')->directory.'/'.$this->firstMedia('edu_image')->filename.'.'.$this->firstMedia('edu_image')->extension : $value = 'images/no-image.jpg';
    }

    public function getInsAttribute()
    {
        return $this->hasMedia('ins_image') ?$value = 'storage/'.$this->firstMedia('ins_image')->directory.'/'.$this->firstMedia('ins_image')->filename.'.'.$this->firstMedia('ins_image')->extension : $value = 'images/no-image.jpg';
    }

    public function getJuAttribute()
    {
        return $this->hasMedia('ju_image') ?$value = 'storage/'.$this->firstMedia('ju_image')->directory.'/'.$this->firstMedia('ju_image')->filename.'.'.$this->firstMedia('ju_image')->extension : $value = 'images/no-image.jpg';
    }

    public function getOtherAttribute()
    {
        return $this->hasMedia('other_image') ?$value = 'storage/'.$this->firstMedia('other_image')->directory.'/'.$this->firstMedia('other_image')->filename.'.'.$this->firstMedia('other_image')->extension : $value = 'images/no-image.jpg';
    }


    public function getImageSmallAttribute()
    {
        return $this->hasMedia('customer') ?$value = 'storage/'.$this->firstMedia('customer')->directory.'/thumb_small_'.$this->firstMedia('customer')->filename.'.'.$this->firstMedia('customer')->extension : $value = 'images/thumb_small_no_image.jpg';
    }

    public function contact()
    {
        return $this->hasOne(Contacts::class, 'customer_id');
    }

    public function loc()
    {
        return $this->hasOne(Location::class, 'customer_id');
    }

    public function insurance()
    {
        return $this->hasOne(Insurance::class, 'customer_id');
    }

    public function physical()
    {
        return $this->hasOne(Physical::class, 'customer_id');
    }

    public function education()
    {
        return $this->hasOne(Education::class, 'customer_id');
    }

    public function employ()
    {
        return $this->hasOne(Employment::class, 'customer_id');
    }

    public function banks()
    {
        return $this->hasMany(Bank::class, 'customer_id');
    }

    public function dates()
    {
        return $this->hasMany(Date::class, 'customer_id');
    }

}
