<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = [
        'name',
        'image',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_id');
    }
}
