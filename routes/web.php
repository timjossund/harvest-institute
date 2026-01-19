<?php

use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [CourseController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'verified']);

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
    Route::get('/courses/{course}/{lecture}', [LectureController::class, 'show'])->name('lectures.show');
    Route::get('/courses/{course}/lectures/{lecture}/edit', [LectureController::class, 'edit'])->name('lectures.edit');
    Route::patch('/courses/{course}/lectures/{lecture}', [LectureController::class, 'update'])->name('lectures.update');
    Route::delete('/courses/{course}/lectures/{lecture}', [LectureController::class, 'destroy'])->name('lectures.destroy');
    // test routes
    Route::get('/courses/{course}/lectures/{lecture}/test', [TestController::class, 'index'])->name('tests.index');
    Route::get('/courses/{course}/lectures/{lecture}/test/create', [TestController::class, 'create'])->name('tests.create');
    Route::post('/courses/{course}/lectures/{lecture}/test', [TestController::class, 'store'])->name('tests.store');
    Route::get('/courses/{course}/lectures/{lecture}/test/{test}', [TestController::class, 'show'])->name('tests.show');
    Route::get('/courses/{course}/lectures/{lecture}/test/{test}/edit', [TestController::class, 'edit'])->name('tests.edit');
    Route::patch('/courses/{course}/lectures/{lecture}/test/{test}', [TestController::class, 'update'])->name('tests.update');
    Route::delete('/courses/{course}/lectures/{lecture}/test/{test}', [TestController::class, 'destroy'])->name('tests.destroy');
    // question routes
    Route::get('/courses/{course}/lectures/{lecture}/test/{test}/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('/courses/{course}/lectures/{lecture}/test/{test}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/courses/{course}/lectures/{lecture}/test/{test}/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('/courses/{course}/lectures/{lecture}/test/{test}/questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
    Route::get('/courses/{course}/lectures/{lecture}/test/{test}/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::patch('/courses/{course}/lectures/{lecture}/test/{test}/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/courses/{course}/lectures/{lecture}/test/{test}/questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
});

require __DIR__.'/auth.php';
