<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestTracker extends Model
{
    protected $table = 'tests_taken';

    protected $fillable = [
        'test_id',
        'user_id',
        'test_score_id',
        'completed',
    ];

    public function testTracked(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }

    public function userTracked(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scoreTracked(): BelongsTo
    {
        return $this->belongsTo(TestScore::class);
    }
}
