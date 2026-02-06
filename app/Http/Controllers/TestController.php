<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Course;
use App\Models\Lecture;

class TestController extends Controller
{
    public function index(Course $course, Lecture $lecture, Test $test)
    {
        return view('tests.single', [
            'test' => $lecture->test,
            'course' => $course,
            'lecture' => $lecture
        ]);
    }

    public function create(Course $course, Lecture $lecture)
    {
        return view('tests.create', [
            'course' => $course,
            'lecture' => $lecture
        ]);
    }

    public function store(Request $request, Course $course, Lecture $lecture)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $lecture_id = $lecture->id;

        Test::create([
            'name' => $request->name,
            'description' => $request->description,
            'lecture_id' => $lecture_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('tests.index', [$course, $lecture, $lecture_id])->with('success', 'Test created successfully');
    }
}
