<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AddTeacherController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\ExamController;
use App\Http\Controllers\admin\ClassSchedulesController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\SubjectController;


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

// Teacher
Route::get('admin/teacher/list', [TeacherController::class, 'teacher'])->name('admin.teacher.list');
Route::get('admin/addTeacher', [TeacherController::class, 'addTeacher'])->name('admin.addTeacher');
Route::get('admin/editTeacher', [TeacherController::class, 'editTeacher'])->name('admin.editTeacher');
Route::post('admin/addTeacher/from', [TeacherController::class, 'addTeacherFrom'])-> name('admin.addTeacherFrom');


// Exam
Route::get('admin/exam/list', [ExamController::class, 'exam'])->name('admin.exam.list');
Route::get('admin/addExam', [ExamController::class, 'addExam'])->name('admin.addExam');
Route::post('admin/addExam/from', [ExamController::class, 'addExamFrom'])-> name('admin.addExamFrom');


// Student
Route::get('admin/student/list', [StudentController::class, 'student'])->name('admin.student.list');
Route::get('admin/editStudent', [StudentController::class, 'editStudent'])->name('admin.editStudent');


// Class Schedule
Route::get('admin/classSchedule/list', [ClassSchedulesController::class, 'classSchedule'])->name('admin.classSchedule.list');
Route::get('admin/addClassSchedule', [ClassSchedulesController::class, 'addClassSchedule'])->name('admin.addClassSchedule');
Route::post('admin/addClassSchedule/from', [ClassSchedulesController::class, 'addClassScheduleFrom'])-> name('admin.addClassScheduleFrom');

// Subject
Route::get('admin/subject/list', [SubjectController::class, 'subject'])->name('admin.subject.list');
Route::get('admin/addSubject', [SubjectController::class, 'addSubject'])->name('admin.addSubject');
Route::post('admin/addSubject/from', [SubjectController::class, 'addSubjectFrom'])->name('admin.addSubjectFrom');







