<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'fullname',
        'email',
        'subject',
        'message',
        'budget'
    ];

}
