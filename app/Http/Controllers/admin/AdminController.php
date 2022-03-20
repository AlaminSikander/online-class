<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddTeacher;

class AdminController extends Controller
{
    
    
    
    
    public function subject(){
        return view('admin.pages.subject');
    }
    public function addSubject(){
        return view('admin.pages.addSubject');
    }
    
    
    
    
    
}
