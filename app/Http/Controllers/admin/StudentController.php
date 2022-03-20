<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){
        return view('admin.pages.student');
    }
    public function editStudent(){
        return view('admin.pages.editStudent');
    }
}
