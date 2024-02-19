<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email'=>$request->email,
        ]);

        $student->studentDetail()->create([
            'alter_no' => $request->alter_no,
            'address' => $request->address,
            'course' => $request->course,
            'roll_no' => $request -> roll_no,
        ]);
    }
}
