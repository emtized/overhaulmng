<?php

namespace App\Models;

use App\Traits\Uuids;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends BaseModel
{
    use HasFactory,HasRoles;

    protected $guarded = ['id'];
}
