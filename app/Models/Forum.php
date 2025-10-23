<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Storage;

class Forum extends Model
{
    //
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryType(): BelongsTo
    {
        return $this->belongsTo(CategoryType::class);
    }

    public function userLikes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_forum');
    }

    public function getImage($image){
        $url = Storage::disk('supabase')->getAdapter()->getPublicUrl($image, [
            'download' => false, // Set this to true if you want the user's browser to automatically trigger download
        ]);
        return $url;
    }
}
