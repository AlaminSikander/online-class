<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function student(){
        
        return view('admin.pages.student');
    }
    public function teacher(){
        
        return view('admin.pages.teacher');
    }
    
    public function exam(){
        
        return view('admin.pages.exam');
    }
    public function classSchedule(){
        
        return view('admin.pages.classSchedule');
    }
    public function subject(){
        
        return view('admin.pages.subject');
    }
    public function addTeacher(){
        
        return view('admin.pages.addTeacher');
    }
    public function addSubject(){
        
        return view('admin.pages.addSubject');
    }
    public function addExam(){
        
        return view('admin.pages.addExam');
    }
    public function addClassSchedule(){
        
        return view('admin.pages.addClassSchedule');
    }
    public function editTeacher(){
        
        return view('admin.pages.editTeacher');
    }
    public function editStudent(){
        
        return view('admin.pages.editStudent');
    }
    
}
