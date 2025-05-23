<?php

namespace App\Models;

use App\Traits\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory,SoftDeletes,Image;

    protected $fillable = [
        'name',
        'image',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
