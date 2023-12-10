<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'customer_contacts';
    protected $guarded = ['id'];
}
