<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeAdminController extends Controller
{
    public function index()
    {
        return view ('grade-admin', [
            'title' => 'Grade Admin',
            'grade' => Grade::all()
        ]);
    }
}
