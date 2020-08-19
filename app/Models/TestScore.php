<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestScore extends Model
{
    use SoftDeletes;
    protected $table = 'test_scores';
    protected $fillable = [
        'student_id',
        'point_1',
        'point_2',
        'point_3',
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
