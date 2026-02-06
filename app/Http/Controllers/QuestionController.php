<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Question;
use App\Models\Course;
use App\Models\Lecture;

class QuestionController extends Controller
{
    public function create(Course $course, Lecture $lecture, Test $test)
    {
        return view('questions.create', [
            'course' => $course,
            'lecture' => $lecture,
            'test' => $test,
        ]);
    }

    public function store(Request $request, Course $course, Lecture $lecture, Test $test)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $question = new Question();
        $question->question = $request->name;   
        $question->answer = '';
        $question->test_id = $test->id;
        $question->save();
        return redirect()->route('tests.index', [$course, $lecture, $test]);
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return redirect()->route('tests.index', [$question->test->lecture->course, $question->test->lecture, $question->test]);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('tests.index', [$question->test->lecture->course, $question->test->lecture, $question->test]);
    }
}
