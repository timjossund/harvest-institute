<?php

use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // course routes
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::patch('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
    // lecture routes
    Route::get('/courses/{course}/lectures', [LectureController::class, 'index'])->name('lectures.index');
    Route::get('/courses/{course}/lectures/create', [LectureController::class, 'create'])->name('lectures.create');
    Route::post('/courses/{course}/lectures', [LectureController::class, 'store'])->name('lectures.store');
    Route::get('/courses/{course}/lectures/{lecture}', [LectureController::class, 'show'])->name('lectures.show');
    Route::get('/courses/{course}/lectures/{lecture}/edit', [LectureController::class, 'edit'])->name('lectures.edit');
    Route::patch('/courses/{course}/lectures/{lecture}', [LectureController::class, 'update'])->name('lectures.update');
    Route::delete('/courses/{course}/lectures/{lecture}', [LectureController::class, 'destroy'])->name('lectures.destroy');
});

require __DIR__.'/auth.php';
