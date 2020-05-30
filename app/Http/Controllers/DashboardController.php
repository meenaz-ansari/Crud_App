<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Staff;

class DashboardController extends Controller
{
     public function index()
    {
        $student_count = Student::all()->count();
        $staff_count = Staff::all()->count();
        return view('Dashboard/index', compact('student_count','staff_count'));
    }
}
