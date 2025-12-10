<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        return view('tests.index');
    }

    public function create()
    {
        return view('tests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'lecture_id' => 'required',
            'user_id' => 'required',
        ]);

        Test::create([
            'name' => $request->name,
            'description' => $request->description,
            'lecture_id' => $request->lecture_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('tests.index')->with('success', 'Test created successfully');
    }
}
