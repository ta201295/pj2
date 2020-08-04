<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use SoftDeletes;
    protected $table = 'classrooms';
    protected $fillable = [
        'name',
        'subject_id',
        'start_day',
        'end_day',
        'day_per_week',
    ];

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function testScores()
    {
        return $this->hasMany(TestScore::class);
    }
}


