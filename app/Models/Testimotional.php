<?php

namespace App\Models;

use App\Traits\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimotional extends Model
{
    use HasFactory, SoftDeletes, Image;

    protected $fillable = [
        'name',
        'position',
        'description',
        'image',
        'rate',
        'is_active',
    ];
}
