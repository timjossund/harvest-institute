<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
        'slug'
    ];

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
