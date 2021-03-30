<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Users;
use Auth;

class CoursesController extends Controller
{
    
	public function getCourses (){
      $courses = Courses::all();
        return view('courses', compact('courses')); 
    }
	
	public function getDetail($id = null){
		$obj = Courses::find($id);
		return view('details', compact('obj'));
	}
	
}
