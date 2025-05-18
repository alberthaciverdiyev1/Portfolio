<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'tags',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'seo_other_codes',
        'is_active'
    ];
    protected $casts = [
        'tags' => 'array',
        'seo_keywords' => 'array',
        'is_active' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
           $model->slug = $model->slug ?? Str::slug($model->name).'-'.Str::random(6);

        });
    }
}
