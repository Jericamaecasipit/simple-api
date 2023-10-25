<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function getAllSubjects()
{
    $subjects = Subject::all(); // Assuming you have a "Subject" model
    return response()->json($subjects);
}

public function addSubject(Request $request)
{
    $data = $request->validate([
        'course_code' => 'required',
        'course_description' => 'required',
        'units' => 'required|integer',
    ]);

    $subject = Subject::create($data);

    return response()->json($subject, 201);
}

}
