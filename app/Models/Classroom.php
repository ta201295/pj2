<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Classroom extends Model
{
    use SoftDeletes;
    use Searchable;
    
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

    public function toSearchableArray()
    {
        $array = $this->only('name');
        
        return $array;
    }
}


