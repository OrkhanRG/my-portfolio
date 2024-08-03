<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'creator_id',
        'category_id',
        'main_image',
        'short_description',
        'description',
        'status',
        'expire_date',
        'publish_date',
    ];


    public function category(): HasOne
    {
        return $this->hasOne(BlogCategory::class, 'id', 'category_id');
    }

    public function creator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    }
}
