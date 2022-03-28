<?php

namespace App\Http\Controllers\admin;

use App\Models\Subject;
use App\Models\AddTeacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TeacherController extends Controller
{

    public function editTeacher($id){
        $teacher = AddTeacher::find($id);
        $subjects = Subject::all();
        return view('admin.pages.editTeacher', compact('subjects','teacher'));
    }
    //update
    public function updateTeacher(Request $request,$id){
        $teacher = AddTeacher::find($id);
        $subjects = Subject::all();
        if($request->hasFile('tImage'))
            {
        $file=$request->file('tImage');
        $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
        }

        $teacher->update(
            [
                'tName'=> $request->tName,
                'tImage'=> $filename,
                'subject_id'=> $request->subject_id,
                'tGender'=> $request->tGender,
                'tBOD'=> $request->tBOD,
                'tMobile'=> $request->tMobile,
                'tJD'=> $request->tJD,
                'tUsername'=> $request->tUsername,
                'tEmail'=> $request->tEmail,
                'tPassword'=> $request->tPassword,
                'tAddress'=> $request->tAddress,
                'tCity'=> $request->tCity,
                'tState'=> $request->tState,
                'tZipcode'=> $request->tZipcode,
            ]
            );
            return redirect()->route('admin.teacher.list');

    }

    public function teacherProfile($id){
        // dd($id);
        $teacher = AddTeacher::find($id);
        // dd($teacher);
        return view('admin.pages.teacherProfile', compact('teacher'));
    }

    public function addTeacher(){
        $subjects = Subject::all();
        return view('admin.pages.addTeacher', compact('subjects'));
    }

    public function teacher(){
        // $teacher = AddTeacher :: all();
        $teacher = AddTeacher::with('subject')->get();
        return view('admin.pages.teacher',compact('teacher'));
    }

    

    public function addTeacherFrom(Request $request ){
        if($request->hasFile('tImage'))
    {
        $file=$request->file('tImage');
        $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
    }


        AddTeacher::create(
            [
                'tName'=> $request->tName,
                'tImage'=> $filename,
                'subject_id'=> $request->subject_id,
                'tGender'=> $request->tGender,
                'tBOD'=> $request->tBOD,
                'tMobile'=> $request->tMobile,
                'tJD'=> $request->tJD,
                'tUsername'=> $request->tUsername,
                'tEmail'=> $request->tEmail,
                'tPassword'=> $request->tPassword,
                'tAddress'=> $request->tAddress,
                'tCity'=> $request->tCity,
                'tState'=> $request->tState,
                'tZipcode'=> $request->tZipcode,
            ]
            );
            return redirect()->route('admin.teacher.list');
    }


    public function teacherDelete($id){
        AddTeacher::find($id)->delete();
        Toastr::success('Teacher deleted succesfully', 'Teacher');
        return redirect()->route('admin.teacher.list');
        
    }
}
