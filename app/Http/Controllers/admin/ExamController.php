<?php

namespace App\Http\Controllers\admin;

use App\Models\AddExam;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function exam(){
        // $examView = AddExam :: all();
        $examView = AddExam :: with('subject')->get();
        return view('admin.pages.exam', compact('examView'));
    }

    public function examDelete($id){
        AddExam::find($id)->delete();
        return redirect()->route('admin.exam.list');
    }

    public function addExam(){
        $subjects = Subject::all();
        return view('admin.pages.addExam', compact('subjects'));
    }
    public function addExamFrom(Request $request ){
        AddExam::create(
            [
                'examName'=> $request->examName,
                'examClass'=> $request->examClass,
                'subject_id'=> $request->subject_id,
                
                'examStartTime'=> $request->examStartTime,
                'examEndTime'=> $request->examEndTime,
                'examDate'=> $request->examDate,
            ]
            );
            return redirect()->route('admin.exam.list');
    }




}
