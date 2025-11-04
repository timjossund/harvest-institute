<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    public function show(Course $course)
    {
        return view('courses.single', [
            'course' => $course
        ]);
    }
}
