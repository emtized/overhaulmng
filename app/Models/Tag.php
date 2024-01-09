<?php

namespace App\Models;

use App\Models\Blog;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends BaseModel
{
    use HasFactory,Uuids;

    protected $table = 'tags';
    protected $guarded = ['id'];

    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }
}
