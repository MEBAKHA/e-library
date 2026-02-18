<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);

    }
    
}
