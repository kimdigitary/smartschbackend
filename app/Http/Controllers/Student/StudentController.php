<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * List all students in the school
     */
    public function index()
    {
        return view("livewire.student.students");
        // $students = Student::all();
        // return view("", compact(""));
    }
}
