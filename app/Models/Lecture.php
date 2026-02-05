<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function test()
    {
        return $this->hasOne(Test::class);
    }
}
