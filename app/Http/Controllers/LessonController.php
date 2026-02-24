<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(){
        return view('pages/lessons.index');
    }

    public function show(){
        return view('pages/lessons.show');
    }
}
