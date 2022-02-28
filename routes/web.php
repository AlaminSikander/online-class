<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});
Route::get('admin/student', [AdminController::class, 'student'])->name('admin.student');
Route::get('admin/teacher', [AdminController::class, 'teacher'])->name('admin.teacher');
Route::get('admin/exam', [AdminController::class, 'exam'])->name('admin.exam');
Route::get('admin/classSchedule', [AdminController::class, 'classSchedule'])->name('admin.classSchedule');
Route::get('admin/subject', [AdminController::class, 'subject'])->name('admin.subject');
Route::get('admin/addTeacher', [AdminController::class, 'addTeacher'])->name('admin.addTeacher');
Route::get('admin/addSubject', [AdminController::class, 'addSubject'])->name('admin.addSubject');
Route::get('admin/addExam', [AdminController::class, 'addExam'])->name('admin.addExam');
Route::get('admin/addClassSchedule', [AdminController::class, 'addClassSchedule'])->name('admin.addClassSchedule');
Route::get('admin/editTeacher', [AdminController::class, 'editTeacher'])->name('admin.editTeacher');

