<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact', [
            'title' => 'contact',
            'name' => 'Zesya Feryal',
            'class' => '11 PPLG 2',
            'linkedin' => 'https://www.linkedin.com/in/zesya-feryal-4452b32a1/',
            'repository' => 'https://github.com/zaesya',
             ]);
    }
}
