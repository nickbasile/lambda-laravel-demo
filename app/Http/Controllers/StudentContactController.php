<?php

namespace App\Http\Controllers;

use App\Mail\StudentContact;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|unique:students|email',
            'message' => 'required',
            'student_id' => 'required|integer',
        ]);

        $student = Student::findOrFail($validatedData['student_id']);

        Mail::to($student->email)->send(new StudentContact($validatedData));

        return redirect($student->path())
            ->with('status', 'Message sent!');
    }
}
