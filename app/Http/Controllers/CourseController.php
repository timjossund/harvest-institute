<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', [
            'courses' => $courses
        ]);
    }

    public function dashboard()
    {
        $courses = Course::all();
        return view('dashboard', [
            'courses' => $courses
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'nullable|unique:courses,slug'
        ]);
        
        $slug = Str::slug($request->name);

        $request->merge(['slug' => $slug]);
        Course::create($request->all());

        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        return view('courses.single', [
            'course' => $course
        ]);
    }


    public function edit(Course $course)
    {
        return view('courses.edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'nullable|unique:courses,slug,' . $course->id,
        ]);

        $slug = Str::slug($request->name);
        $request->merge(['slug' => $slug]);

        $course->update($request->all());

        return redirect()->route('courses.index');
    }
}
