<?php

namespace App\Models;

use App\Traits\ActiveScope;
use App\Traits\Icon;
use App\Traits\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Service extends Model
{
    use SoftDeletes,Image,ActiveScope,Icon;
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'slug',
        'icon',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->slug = $model->slug ?? Str::slug($model->name).'-'.Str::random(6);

        });
    }
}
