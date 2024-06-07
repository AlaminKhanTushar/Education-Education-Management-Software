<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{
    private $subject;
    private $subjects;

    public function index()
    {
        return view('front.subject.add');
    }
    public function create(Request $request)
    {
        Subject::newSubject($request);
        return redirect('/add-subject')->with('message','New subject Create Successfully');
    }
    public function manage()
    {
        $this->subjects = Subject::where('teacher_id',Session::get('teacher_id'))->get();
        return view('front.subject.manage', ['subjects' => $this->subjects]);
    }
    public function delete($id)
    {
        $this->subject = Subject::find($id);
        if (file_exists($this->subject->image))
        {
            unlink($this->subject->image);
        }
        $this->subject->delete();
        return redirect('/manage-subject')->with('message', 'Subject info delete successfully.');
    }
}
