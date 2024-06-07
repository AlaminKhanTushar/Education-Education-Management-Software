<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    private static $user;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'admin-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newUser($request)
    {
        self::$user                     = new User();
        self::$user->name               = $request->name;
        self::$user->email              = $request->email;
        self::$user->phoneNumber        = $request->phoneNumber;
        self::$user->address            = $request->address;
        self::$user->password           = bcrypt($request->password) ;
        self::$user->profile_photo_path = self::getImageUrl($request);
        self::$user->date               = $request->date;
        self::$user->save();

    }
    public static function updateUser($request, $id)
    {

        self::$user                     =User::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$user->profile_photo_path))
            {
                unlink(self::$user->profile_photo_path);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$user->image;
        }
        self::$user->name               = $request->name;
        self::$user->email              = $request->email;
        self::$user->phoneNumber        = $request->phoneNumber;
        self::$user->address            = $request->address;
        if (isset($request->password))
        {
            self::$user->password=bcrypt($request->password);
        }
        self::$user->profile_photo_path = self::$imageUrl;
        self::$user->date               = $request->date;
        self::$user->status             = $request->status;
        self::$user->save();

    }
}
