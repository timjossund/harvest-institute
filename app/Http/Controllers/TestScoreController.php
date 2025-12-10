<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestScoreController extends Controller
{
    public function create()
    {
        return view('test-scores.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'score' => 'required',
        ]);

        TestScore::create([
            'score' => $request->score,
            'test_id' => $request->test_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('test-scores.index')->with('success', 'Score Recorded!');
    }
}
