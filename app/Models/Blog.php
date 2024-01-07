<?php

namespace App\Models;

use App\Traits\Uuids;
use Plank\Mediable\Mediable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends BaseModel
{
    use HasFactory,Uuids,Mediable,SoftDeletes;

    protected $table = 'blogs';
    protected $guarded = ['id'];

    public function getImageByMediaName($mediaAttributeName)
    {
        return $this->hasMedia($mediaAttributeName)
            ? 'storage/' . $this->firstMedia($mediaAttributeName)->directory . '/' .
                $this->firstMedia($mediaAttributeName)->filename . '.' .
                $this->firstMedia($mediaAttributeName)->extension
            : 'img/avatars/1.png';
    }


    public function getImageSmallAttribute()
    {
        return $this->getImageByMediaName('blog');
    }
}
