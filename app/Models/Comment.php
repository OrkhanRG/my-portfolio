<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'parent_id',
        'blog_id',
        'name',
        'email',
        'comment',
        'ip',
        'is_active',
        'is_approved',
        'like_count',
    ];

    public function parentComment(): HasOne
    {
        return $this->hasOne(Comment::class, 'id', 'parent_id');
    }

    public function childComments(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id');
    }

    public function blog(): HasOne
    {
        return $this->hasOne(Blog::class, 'id', 'blog_id');
    }
}
