<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
