<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client',
        'category_id',
        'main_image',
        'short_description',
        'description',
        'status',
        'location',
        'url',
        'publish_date',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'project_id', 'id');
    }
}
