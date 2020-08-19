<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PagesController extends Controller
{
    public function getIndex() {
        return view('user.pages.index');
    }
  
    public function getAbout() {
        return view('user.pages.about');
    }

    public function getContact() {
        return view('user.pages.contact');
    }

    public function contactSend(Request $request)
    {
        $data = $request->all();
        Contact::create($data); 

        return back()->with('success', 'Thanks for contacting us!');
    }

    public function getCourse() {
        return view('user.pages.course');
    }

    public function getTeacher() {
        return view('user.pages.teacher');
    }

}
