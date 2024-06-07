<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollConfirmationMail;
use Session;

class SubjectEnrollController extends Controller
{
    private $student;
    private $enroll;
    private $data = [];

    public function enroll($id)
    {
        return view('front.enroll.enroll',['id'=> $id]);
    }
    public function newEnroll(Request $request, $id)
    {

        $this->student           = new Student();
        $this->student->name     = $request->name;
        $this->student->email    = $request->email;
        $this->student->password = bcrypt($request->mobile);
        $this->student->mobile   = $request->mobile;
        $this->student->save();

        Session::put('student_id', $this->student->id);
        Session::put('student_name', $this->student->name);

        $this->enroll = new Enroll();
        $this->enroll->subject_id = $id;
        $this->enroll->student_id = $this->student->id;
        $this->enroll->enroll_date      = date('Y-m-d');
        $this->enroll->enroll_timestamp = strtotime(date('Y-m-d'));
        $this->enroll->save();

        $this->data = [
            'name'      => $request->name,
            'user_id'   => $request->email,
            'password'  => $request->mobile,
        ];
        Mail::to($request->email)->send(new EnrollConfirmationMail($this->data));
        return redirect('/subject-detail/'.$id)->with('message', 'Registration successfully complete.');

    }
}




