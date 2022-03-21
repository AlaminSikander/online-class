<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddClassSchedule;

class ClassSchedulesController extends Controller
{
    public function classSchedule(){
        $classScheduleView = AddClassSchedule :: all();
        return view('admin.pages.classSchedule', compact('classScheduleView'));
    }


    public function addClassSchedule(){
        return view('admin.pages.addClassSchedule');
    } 

    public function addClassScheduleFrom(Request $request ){
        AddClassSchedule::create(
            [
                'CS_Class'=> $request->CS_Class,
                'CS_Subject'=> $request->CS_Subject,
                'CS_date'=> $request->CS_date,
                'CS_EndTime'=> $request->CS_EndTime,
                'CS_StartTime'=> $request->CS_StartTime,
                
            ]
            );
            return redirect()->route('admin.classSchedule.list');
    }


}
