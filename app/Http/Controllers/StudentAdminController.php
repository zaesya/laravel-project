<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    public function index()
    {
        $students = Student::with(['grade.department'])->get();

        return view('student-admin', [
            'title' => 'Students Admin',
            'students' => $students,
             
        ]);
    }
}
