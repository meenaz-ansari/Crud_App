<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
class StaffController extends Controller
{
    public function index()
    {
        $all_staff = Staff::all();
        return view('staff/index',compact('all_staff'));
    }

    public function create()
    {
        return view('staff/create');
    } 
    public function store(Request $request)
    {
        $Staff = new Staff();
       $Staff->name = $request-> get('name');
       $Staff->staff_id = $request-> get('staff_id');
       $Staff->email = $request-> get('email');
       $Staff->contact_number = $request-> get('contact_number');
       $Staff->save();
       return redirect('/staff/index')->with('success', 'staff added successfully');
    } 
    public function show()
    {

    } 
    public function edit($id)
    {
$staff = Staff::find($id);
return view('Staff/edit',compact('staff'));
    }
 public function update(Request $request,$id)
 {
     $staff = Staff::find($id);
$staff->name = $request-> get('name');
$staff->staff_id = $request-> get('staff_id');
$staff->email= $request-> get('email');
$staff->contact_number = $request-> get('contact_number');

$staff->save();
return redirect('/staff/index')->with('success', 'staff updated successfully');
 }
 public function destroy($id)
 {
   $staff = Staff::find($id);
   $staff->delete();
   return redirect('/staff/index')->with('success', 'staff deleted successfully');
 }

}

  

