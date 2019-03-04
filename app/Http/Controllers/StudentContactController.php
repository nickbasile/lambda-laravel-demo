<?php

namespace App\Http\Controllers;

use App\Mail\StudentContact;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentContactController extends Controller
{
    public function store(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|unique:students|email',
            'message' => 'required',
        ]);

        Mail::to($student->email)
            ->send(new StudentContact($validatedData));

        return redirect($student->path())
            ->with('status', 'Message sent!');
    }
}
