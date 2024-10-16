<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Address;

class StudentController extends Controller
{
    // POST API to create a student and address
    public function store(Request $request)
    {
        // Create Student
        $student = Student::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);

        // Create Address
        $address = Address::create([
            'student_id' => $student->_id,
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip_code' => $request->input('zip_code')
        ]);

        return response()->json([
            'student' => $student,
            'address' => $address
        ], 201);
    }

    // GET API to fetch student data with address
    public function index()
    {
        $students = Student::all()->map(function($student) {
            $address = Address::where('student_id', $student->_id)->first();
            return [
                'student' => $student,
                'address' => $address
            ];
        });

        return response()->json($students, 200);
    }
}
