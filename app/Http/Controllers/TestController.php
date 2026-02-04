<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;

class TestController extends Controller
{
    public function index(Course $course, Lecture $lecture)
    {
        return view('lectures.single', compact('course', 'lecture'));
    }
    
    public function create(Course $course, Lecture $lecture)
    {
        return view('tests.create', compact('course', 'lecture'));
    }
    
    public function show(Course $course, Lecture $lecture, Test $test)
    {
        $test = $lecture->tests()->find($test->id);
        return view('tests.single', compact('course', 'lecture', 'test'));
    }
    public function store(Request $request, Course $course, Lecture $lecture)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'lecture_id' => 'required',
        ]);

        Test::create([
            'name' => $request->name,
            'description' => $request->description,
            'lecture_id' => $request->lecture_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('lectures.show', [$course, $lecture])->with('success', 'Test created successfully');
    }
    public function edit(Course $course, Lecture $lecture, Test $test)
    {
        return view('tests.edit', compact('course', 'lecture', 'test'));
    }
    public function update(Request $request, Course $course, Lecture $lecture, Test $test) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        $test->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('tests.show', [$course, $lecture])->with('success', 'Test updated successfully');
    }
    public function destroy(Course $course, Lecture $lecture, Test $test) {
        $test->delete();
        return redirect()->route('tests.show', [$course, $lecture])->with('success', 'Test deleted successfully');
    }
}
