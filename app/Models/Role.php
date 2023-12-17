<?php
namespace App\Models;

use App\Traits\Uuids;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends SpatieRole
{
    use HasFactory,Uuids;

    protected $primaryKey = 'uuid';
}
