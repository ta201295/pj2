<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'title',
        'content',
    ];
}
