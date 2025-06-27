<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    //
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_question');
    }
}
