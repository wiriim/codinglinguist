<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryType extends Model
{
    //
    public function forums(): HasMany
    {
        return $this->hasMany(Forum::class);
    }
    protected $table = 'category_types';
}
