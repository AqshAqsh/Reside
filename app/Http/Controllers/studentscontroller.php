<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class studentscontroller extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'email' => 'required|email|max:255|unique:students,email',
            'dob' => 'required|date',
            'gender' => 'required',
            'address' => 'required|string|max:255',
            'phone_no' => 'required|numeric',
            'department' => 'required|string|max:100',
            //'check_in' => 'required|date',
            //'check_out' => 'required|date|after_or_equal:check_in',
        ]);
        
//inser query
        $student = new Student();
        $student->name = $request->input('name');
        $student->password = bcrypt($request->input('password')); // Password hashed
        $student->email = $request->input('email');
        $student->dob = $request->input('dob');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->phone_no = $request->input('phone_no');
        $student->department = $request->input('department');
        $student->check_in = $request->input('check_in');
        $student->check_out = $request->input('check_out');

        $student->save();
        return redirect('/register/view');


       // return redirect()->back()->with('success', 'Student registered successfully!');

        echo "<pre>";
        print_r($request->all());
    }
    public function view()
    {

        $students = Student::all();
        $data = compact('students');
        return view('students-view')->with($data);
    }
    public function delete($id)
    {
        $students = Student::find($id);
        if (!is_null($students))
        {
            $students->delete();
        }
        return redirect('register/view');
        //echo "<pre>";
        //print_r($students);
            
    }

}
