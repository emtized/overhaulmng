<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Document extends BaseModel
{
    use HasFactory,Uuids,Mediable;

    protected $table = 'documents';
    protected $guarded = ['id'];

    public function getImageAttribute()
    {
        return $this->hasMedia('customer') ?$value = 'storage/'.$this->firstMedia('customer')->directory.'/'.$this->firstMedia('customer')->filename.'.'.$this->firstMedia('customer')->extension : $value = 'images/no-image.jpg';
    }

    public function getImageSmallAttribute()
    {
        return $this->hasMedia('customer') ?$value = 'storage/'.$this->firstMedia('customer')->directory.'/thumb_small_'.$this->firstMedia('customer')->filename.'.'.$this->firstMedia('customer')->extension : $value = 'images/thumb_small_no_image.jpg';
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
