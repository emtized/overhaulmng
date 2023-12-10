<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'customer_employments';
    protected $guarded = ['id'];


    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
