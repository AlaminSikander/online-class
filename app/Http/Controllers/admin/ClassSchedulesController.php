<?php

namespace App\Http\Controllers\admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\AddClassSchedule;
use App\Http\Controllers\Controller;

class ClassSchedulesController extends Controller
{
    public function classSchedule(){
        // $classScheduleView = AddClassSchedule :: all();
        $classScheduleView = AddClassSchedule :: with('subject')->get();

        return view('admin.pages.classSchedule', compact('classScheduleView'));
    }

    public function classScheduleDelete($id){
        AddClassSchedule::find($id)->delete();
        return redirect()->route('admin.classSchedule.list');
    }

    public function addClassSchedule(){
        $subjects = Subject::all();
        return view('admin.pages.addClassSchedule',compact('subjects'));
    } 

    public function addClassScheduleFrom(Request $request ){
        AddClassSchedule::create(
            [
                'CS_Class'=> $request->CS_Class,
                'subject_id'=> $request->subject_id,
                'CS_date'=> $request->CS_date,
                'CS_EndTime'=> $request->CS_EndTime,
                'CS_StartTime'=> $request->CS_StartTime,
            ]
            );
            return redirect()->route('admin.classSchedule.list');
    }


}
