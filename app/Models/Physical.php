<?php

namespace App\Models;

use App\Traits\Uuids;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Physical extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'physicals';
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
