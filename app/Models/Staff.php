<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    private static $staff;
    private static $code;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'staff-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function saveStaffBasicInfo($staff, $request, $imageUrl, $code)
    {
        self::$staff->name    = $request->name;
        self::$staff->code    = $code;
        self::$staff->email   = $request->email;
        self::$staff->password= bcrypt($request->password);
        self::$staff->mobile  = $request->mobile;
        self::$staff->address = $request->address;
        self::$staff->image   = $imageUrl;
        self::$staff->save();
    }

    public static function newStaff($request,$code)
    {
        self::$staff          = new Staff();
        self::$imageUrl       = self::getImageUrl($request);
        self::saveStaffBasicInfo(self::$staff, $request, self::$imageUrl,$code);
    }
}
