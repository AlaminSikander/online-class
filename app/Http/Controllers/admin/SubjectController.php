<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function subject(){
        $subjectView = Subject :: all();
        return view('admin.pages.subject', compact('subjectView'));
    }
    public function addSubject(){
        return view('admin.pages.addSubject');
    }

    public function subjectDelete($id){
        Subject::find($id)->Delete();
        return redirect()->route('admin.subject.list');
    }

    public function addSubjectFrom(Request $request ){
        Subject::create(
            [
                
                'subject_name'=> $request->subject_name,
                'subject_class'=> $request->subject_class,
            ]
            );
            return redirect()->route('admin.subject.list');
    }



}
