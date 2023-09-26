<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        "short_description",
        'detail',
        'bg_image',
        'image',
        'image2',
        'icon',
        'status'
    ];
}
