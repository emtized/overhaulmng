<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
