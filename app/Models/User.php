<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Storage;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'status',
        'point',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function forums(): HasMany
    {
        return $this->hasMany(Forum::class);
    }

    public function badges(): BelongsToMany
    {
        return $this->belongsToMany(Badge::class, 'user_badge');
    }

    public function levels(): BelongsToMany
    {
        return $this->belongsToMany(Level::class, 'user_level')->withPivot(columns: 'status');
    }

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'user_question');
    }

    public function forumLikes(): BelongsToMany
    {
        return $this->belongsToMany(Forum::class, 'user_forum');
    }

    public function commentLikes(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class, 'user_comment');
    }

    public function replyLikes(): BelongsToMany
    {
        return $this->belongsToMany(Reply::class, 'user_reply');
    }

    public function viewLogs(): BelongsToMany
    {
        return $this->belongsToMany(Forum::class, 'view_logs');
    }

    public function allowLevel(string $id)
    {
        $allow = false;
        $allowUserLevel = UserLevel::where('user_id', Auth::id())->where('level_id', $id)->exists();
        if ($allowUserLevel) {
            $allow = true;
        }

        return $allow;
    }

    public function questionFinished(string $id)
    {
        $finished = false;
        $questionFinished = UserQuestion::where('user_id', Auth::id())->where('question_id', $id)->exists();
        if ($questionFinished) {
            $finished = true;
        }

        return $finished;
    }

    public function levelFinished(string $levelId, string $courseId)
    {
        $finished = false;
        // dd(UserLevel::where('user_id', Auth::id())->where('level_id', $levelId)
        // ->where('course_id', $courseId)->first()->status);
        $levelFinished = UserLevel::where('user_id', Auth::id())->where('level_id', $levelId)
            ->where('course_id', $courseId)->first()->status == 1;
        if ($levelFinished) {
            $finished = true;
        }

        return $finished;
    }

    public function getProfilePicture(User $user)
    {
        $url = Storage::disk('supabase')->getAdapter()->getPublicUrl($user->image, [
            'download' => false, // Set this to true if you want the user's browser to automatically trigger download
        ]);
        return $url;
    }
}
