<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
