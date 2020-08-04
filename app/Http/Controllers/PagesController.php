<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        return view('pages.index');
    }
  
    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getCourse() {
        return view('pages.course');
    }

    public function getTeacher() {
        return view('pages.teacher');
    }

    public function getSearch() {
        return view('pages.search');
    }
}
