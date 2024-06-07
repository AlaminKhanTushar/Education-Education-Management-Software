<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    private $user;
    private $users;

    public function index()
    {
        return view('admin.auth.add');
    }
    public function create(Request $request)
    {
        User::newUser($request);
        return redirect('/add-user')->with('message', 'User info create successfully');
    }
    public function manage()
    {
        $this->users = User::all();
        return view('admin.auth.manage',['users'=>$this->users]);
    }
    public function edit($id)
    {
        $this->user = User::find($id);
        return view('admin.auth.edit',['user'=>$this->user]);
    }
    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/manage-user')->with('message', 'User info update successfully.');
    }
    public function delete($id)
    {
        $this->user = User::find($id);
        if (file_exists($this->user->image))
        {
            unlink($this->user->image);
        }
        $this->user->delete();
        return redirect('/manage-user')->with('message', 'Teacher info delete successfully.');
    }
}
