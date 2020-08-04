<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestScore extends Model
{
    use SoftDeletes;
    protected $table = 'test_scores';
    protected $fillable = [
        'student_id',
        'classrooms_id',
        'point_1',
        'point_2',
        'point_3',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    
    public function classes()
    {
        return $this->belongsToMany(Classroom::class);
    }
}
