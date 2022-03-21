<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddExam;

class ExamController extends Controller
{
    public function exam(){
        $examView = AddExam :: all();
        return view('admin.pages.exam', compact('examView'));
    }
    public function addExam(){
        return view('admin.pages.addExam');
    }
    public function addExamFrom(Request $request ){
        AddExam::create(
            [
                'examName'=> $request->examName,
                'examClass'=> $request->examClass,
                'examSubject'=> $request->examSubject,
                'examStartTime'=> $request->examStartTime,
                'examEndTime'=> $request->examEndTime,
                'examDate'=> $request->examDate,
            ]
            );
            return redirect()->route('admin.exam.list');
    }




}
