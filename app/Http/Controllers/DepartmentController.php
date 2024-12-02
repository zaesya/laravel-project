<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('departments', [
            'title' => 'Department',
            'department' => $department->load(['students'])
        ]);
    }
}
