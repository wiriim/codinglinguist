<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
    public function replies(): HasMany
    {
        return $this->hasMany(Forum::class);
    }

    public function forums(): HasMany
    {   
        return $this->hasMany(Forum::class);
    }
}
