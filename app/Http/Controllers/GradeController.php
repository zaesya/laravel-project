<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grade', [
            'title' => 'Grade',
            'grade' => $grades->load(['students', 'Department'])
        ]);
    }
}
