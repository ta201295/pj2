<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Student extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $table = 'students';
    protected $fillable = [
        'name',
        'dob',
        'address',
        'phone',
        'classrooms_id',
    ];


    public function class()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function testScores()
    {
        return $this->hasMany(TestScore::class);
    }

    public function toSearchableArray()
    {
        $array = $this->only('name');

        return $array;
    }
}
