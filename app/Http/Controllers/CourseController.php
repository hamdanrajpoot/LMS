<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function AddCourse(Request $req){
        $formFields = $req->validate([
           "name" => 'required',
           "description" => 'required',
           "duration" => 'required',
           "level" => 'required'
        ]);
          Courses::create($formFields);
          return back()->with('message','Course added successfully');
    }
      
        
    public function GetCourses(){
        $courses = Courses::all();
        return view('admin.pages.add-batches',compact('courses'));
    }
     public function GetCoursesUser(){
        $courses = Courses::all();
        return view('admin.pages.add-user',compact('courses'));
    }
}