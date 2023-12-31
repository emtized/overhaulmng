<?php

namespace App\Models;

use App\Models\Bank;
use App\Models\City;
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
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Uuids,Mediable,HasRoles,SoftDeletes;

    protected $guarded = ['id'];

    //casts
    protected $casts = [
        'password' => 'hashed',
    ];


    public function getImageByMediaName($mediaAttributeName)
    {
        return $this->hasMedia($mediaAttributeName)
            ? 'storage/' . $this->firstMedia($mediaAttributeName)->directory . '/' .
                $this->firstMedia($mediaAttributeName)->filename . '.' .
                $this->firstMedia($mediaAttributeName)->extension
            : 'img/no-image.jpg';
    }


    public function getImageSmallAttribute()
    {
        return $this->getImageByMediaName('customer');
    }

    public function getCartAttribute()
    {
        return $this->getImageByMediaName('cart');
    }

    public function getShenaAttribute()
    {
        return $this->getImageByMediaName('shena');
    }

    public function getShena2Attribute()
    {
        return $this->getImageByMediaName('shena2');
    }

    public function getSoldierAttribute()
    {
        return $this->getImageByMediaName('soldier');
    }

    public function getImgAttribute()
    {
        return $this->getImageByMediaName('image');
    }

    public function getSmookImageAttribute()
    {
        return $this->getImageByMediaName('smook_image');
    }

    public function getPoliceAttribute()
    {
        return $this->getImageByMediaName('police');
    }

    public function getDoctorAttribute()
    {
        return $this->getImageByMediaName('doctor');
    }

    public function getWorkAttribute()
    {
        return $this->getImageByMediaName('work');
    }

    public function getEduAttribute()
    {
        return $this->getImageByMediaName('edu');
    }

    public function getInsAttribute()
    {
        return $this->getImageByMediaName('ins');
    }

    public function getJuAttribute()
    {
        return $this->getImageByMediaName('ju');
    }

    public function getOtherAttribute()
    {
        return $this->getImageByMediaName('other');
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

    public function createRelations(array $data)
    {
        $this->contact()->create([
            'phone' => $data['phone'] ?? null,
            'mobile1' => $data['mobile1'] ?? null,
            'mobile2' => $data['mobile2'] ?? null,
        ]);

        $this->loc()->create([
            'body' => $data['body'] ?? null,
            'postal_code' => $data['postal_code'] ?? null,
        ]);

        $this->insurance()->create([
            'job_place' => $data['job_place'] ?? null,
            'number_insurance' => $data['number_insurance'] ?? null,
            'access' => $data['access'] ?? null,
            'weight' => $data['weight'] ?? null,
            'height' => $data['height'] ?? null,
        ]);


        $this->education()->create([
            'field' => $data['field'] ?? null,
        ]);

        $this->employ()->create([
            'job' => $data['job'] ?? null,
        ]);

        $this->physical()->create([
            'disease_detail' => $data['disease_detail'] ?? null,
            'first_disease_detail' => $data['first_disease_detail'] ?? null,
            'drug_detail' => $data['drug_detail'] ?? null,
            'hospital_detail' => $data['hospital_detail'] ?? null,
            'surgery_detail' => $data['surgery_detail'] ?? null,
            'specific_drug_detail' => $data['specific_drug_detail'] ?? null,
            'smok_detail' => $data['smok_detail'] ?? '',
            'smok_past_detail' => $data['smok_past_detail'] ?? null,
            'sport_detail' => $data['sport_detail'] ?? null,
            'work_detail' => $data['work_detail'] ?? null,
            'Commission_detail' => $data['Commission_detail'] ?? null,
        ]);
    }

    public function deleteRelations()
    {
        $this->contact()->delete();
        $this->loc()->delete();
        $this->insurance()->delete();
        $this->education()->delete();
        $this->employ()->delete();
        $this->physical()->delete();

    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }


}
