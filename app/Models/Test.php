<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'name',
        'description',
        'lecture_id',
        'user_id',
    ];

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
