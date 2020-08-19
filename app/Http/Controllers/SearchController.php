<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use App\Models\TestScore;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $students = Student::search($request->get('search'))->get();
            $classrooms = Classroom::search($request->get('search'))->get();
        }
        return view('user.pages.search', compact('students', 'classrooms'));
    }
}
