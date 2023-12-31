<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends BaseModel
{
    use HasFactory,Uuids,SoftDeletes;

    protected $guarded = ['id'];

}
