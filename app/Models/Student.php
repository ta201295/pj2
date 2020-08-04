<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'classrooms';
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
}
