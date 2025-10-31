<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index()
    {
        return view('lectures.index');
    }
    //
    public function create()
    {
        return view('lectures.create');
    }

    public function store(Request $request, Lecture $lecture)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $lecture::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('lectures.index');
    }
}
