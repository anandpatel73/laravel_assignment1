<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $data = Assignment::latest()->get();

        return view('home',compact('data'));
    }
}
