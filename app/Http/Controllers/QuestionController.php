<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            
        ]);
        $question = new Question();
        $question->name = $request->name;
        $question->test_id = $request->test_id;
        $question->save();
        return redirect()->route('questions.show', $question);
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return redirect()->route('questions.show', $question);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index');
    }
}
