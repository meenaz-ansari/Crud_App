<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
class studentController extends Controller
{  public function index(){
       $all_student = Student::all();
       return view('students/index',compact('all_student'));
     }
    public function create()
    {
    	return view('students/create');
    }
     public function store(Request $request)
     {
       $Student = new Student();
       $Student->first_name = $request-> get('first_name');
       $Student->last_name = $request-> get('last_name');
       $Student->save();
       return redirect('index')->with('success', 'student added successfully');
     }
     public function edit($id)
     {
$student = Student::find($id);
return view('students/edit',compact('student'));
     }
  public function update(Request $request,$id)
  {
$student = Student::find($id);
$student->first_name = $request-> get('first_name');
$student->last_name = $request-> get('last_name');
$student->save();
return redirect('index')->with('success', 'student updated successfully');
  }
  public function destroy($id)
  {
    $student = Student::find($id);
    $student->delete();
    return redirect('index')->with('success', 'student deleted successfully');
  }
}
