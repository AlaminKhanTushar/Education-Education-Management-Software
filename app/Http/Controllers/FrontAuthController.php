<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class FrontAuthController extends Controller
{
    private $check;
    private $user;

    public function index()
    {
        return view('front.auth.login');
    }
    public function login(Request $request)
    {
        if($request->check == 1 )
        {
            $this->user = Teacher::where('email',$request->email)->where('status',1)->first();
            if ($this->user)
            {
                if (password_verify($request->password,$this->user->password))
                {
                   Session::put('teacher_id',$this->user->id);
                   Session::put('teacher_name',$this->user->name);
                   Session::put('teacher_image',$this->user->image);
                   return redirect('/teacher-dashboard');
                }else
                {
                    echo 'Invalid password.';
                    exit();
                }
            }else
            {
                return redirect()->back()->with('message','Email is invalid or status is inactive');
            }
        }
       elseif ($request->check == 2)
       {
           $this->user = Staff::where('email',$request->email)->where('status',1)->first();
           if ($this->user)
           {
               if (password_verify($request->password,$this->user->password))
               {
                   Session::put('staff_id',$this->user->id);
                   Session::put('staff_name',$this->user->name);
                   return redirect('/staff-dashboard');
               }else
               {
                   echo 'Invalid password.';
                   exit();
               }
           }else
           {
               return redirect()->back()->with('message','Email is invalid or status is inactive');
           }

       }elseif ($request->check == 0)
        {
            $this->user = Student::where('email',$request->email)->where('status',1)->first();
            if ($this->user)
            {
                if (password_verify($request->password,$this->user->password))
                {
                    Session::put('student_id',$this->user->id);
                    Session::put('student_name',$this->user->name);
                    return redirect('/student-dashboard');
                }else
                {
                    echo 'Invalid password.';
                    exit();
                }
            }else
            {
                return redirect()->back()->with('message','Email is invalid or status is inactive');
            }
        }
        else
        {
            echo 'Create an account';
            exit();
        }


    }

    public function logoutTeacher()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        Session::forget('teacher_image');

        return redirect('/');
    }





}
