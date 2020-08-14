<?php

namespace App\Models;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model implements Searchable
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

    public function getSearchResult(): SearchResult
    {
        $url = route('classrooms.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}


