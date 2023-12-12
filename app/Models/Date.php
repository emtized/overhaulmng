<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'date_working';
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
