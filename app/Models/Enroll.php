<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;

    private static $enroll;
    private static $student;
    private static $image;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'enroll-image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl     =self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newStudentEnroll($request)
    {
        self::$student                     = new Student();
        self::$student->name               = $request->name;
        self::$student->email              = $request->email;
        self::$student->password           = $request->password;
        self::$student->mobile             = $request->mobile;
        self::$student->image              = self::getImageUrl($request);
        self::$student->save();
    }
    public static function newEnrollStudent($request)
    {
        self::$enroll                    = new Enroll();
        self::$enroll->subject_id        = $request->id;
        self::$enroll->student_id        = $request->student_id;
        self::$enroll->enroll_date       = $request->date('Y-m-d');
        self::$enroll->enroll_timestamp  = $request->strtotime(date('Y-m-d'));
        self::$enroll->image             = self::getImageUrl($request);
        self::$enroll->save();
    }
}
