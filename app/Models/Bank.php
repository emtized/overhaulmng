<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'banks_info';
    protected $guarded = ['id'];
}
