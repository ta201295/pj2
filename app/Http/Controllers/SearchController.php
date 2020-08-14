<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $students = Student::search($request->get('search'))->get();
        } else {
            $students = Student::get();
        }
        return view('pages.search', compact('students'));  
    }
}
