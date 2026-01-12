<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required',
            'question_id' => 'required',
            'user_id' => 'required',
            'test_id' => 'required',
        ]);
    }

    public function show($id)
    {
        $answer = Answer::find($id);
        return view('answers.show', compact('answer'));
    }
}
