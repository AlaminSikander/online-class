<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddTeacher;

class TeacherController extends Controller
{
    public function addTeacher(){
        return view('admin.pages.addTeacher');
    }


    public function editTeacher(){
        return view('admin.pages.editTeacher');
    }


    public function teacher(){
        $teacher = AddTeacher :: all();
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
            return redirect()->route('admin.teacher');
    }
}