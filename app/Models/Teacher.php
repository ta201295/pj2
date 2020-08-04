<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use SoftDeletes;
    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'phone',
        'subject_id',
        'image',
    ];
}