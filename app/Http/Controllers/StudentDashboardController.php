<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    private $code;
    private $id;
    private $name;
    private $updateString;
    private $year;
    private $message;
    private $student;
    private $students;


    public function index()
    {
        return view('front.user.student.home');
    }

    public function create(Request $request)
    {
        Student::newStudent($request, $this->getStudentCode($request));
        return redirect('/add-student')->with('message', 'Student info create successfully.');
    }

    private function getStudentCode($request)
    {
        $this->student = Student::orderBy('id', 'desc')->first();
        if ($this->student)
        {
            $this->id = $this->student->id + 1;
        }
        else
        {
            $this->id = 1;
        }
        $this->updateString = preg_replace('/[^A-Za-z0-9]/', "", $request->name);
        $this->name = strtoupper(substr($this->updateString, 0,3));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
        return $this->code;
    }
    public function manage()
    {
        $this->students = Student::orderBy('id', 'desc')->get();
        return view('admin.teacher.manage', ['students' => $this->students]);
    }
    public function updateStatus($id)
    {
        $this->student = Student::find($id);
        if ($this->student->status == 1)
        {
            $this->teacher->status = 0;
            $this->message = 'student status info Active successfully. ';
        }
        else
        {
            $this->student->status = 1;
            $this->message = 'student status info Inactive successfully. ';
        }
        $this->student->save();
        return redirect('/manage-student')->with('message', $this->message);
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('front.user.student.edit', ['teacher' => $this->student]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id, $this->getStudentCode($request));
        return redirect('/manage-student')->with('jsAlert', 'student info update successfully.');
    }

    public function delete($id)
    {
        $this->student = Student::find($id);
        if (file_exists($this->student->image))
        {
            unlink($this->student->image);
        }
        $this->student->delete();
        return redirect('/manage-student')->with('message', 'student info delete successfully.');
    }

}
