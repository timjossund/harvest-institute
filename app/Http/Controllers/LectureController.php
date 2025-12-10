<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LectureController extends Controller
{
    public function index()
    {
        return view('lectures.index');
    }
    //
    public function create(Course $course)
    {
        return view('lectures.create', [
            'course' => $course
        ]);
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'video_url' => 'required',
        ]);

        Lecture::create([
            'name' => $request->name,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'course_id' => $course->id,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('courses.show', $course);
    }

    public function show(Course $course, Lecture $lecture)
    {
        return view('lectures.single', [
            'lecture' => $lecture,
            'course' => $course
        ]);
    }
}
