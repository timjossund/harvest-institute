<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'course_id',
        'name',
        'slug',
        'description',
        'video_url',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
