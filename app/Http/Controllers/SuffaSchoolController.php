<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SuffaSchoolController extends Controller
{
    private $subject;
    private $subjects;

    public function index()
    {
        $this->subjects = Subject::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.home.home', ['subjects' => $this->subjects]);
    }
    public function detail($id)
    {
        $this->subject = Subject::find($id);
        return view('front.subject.details',['subject'=> $this->subject]);
    }
}
