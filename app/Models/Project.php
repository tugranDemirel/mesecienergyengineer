<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'image',
        "client_quote",
        'description',
        'technology',
        'system_size',
        'started_date',
        'ended_date',
        'category_id',
        'status'
    ];

    protected $casts = [
        'started_date' => 'date',
        'ended_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
