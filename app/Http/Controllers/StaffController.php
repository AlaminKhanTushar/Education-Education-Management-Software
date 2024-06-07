<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    private $id;
    private $name;
    private $code;
    private $updateString;
    private $year;
    private $staff;
    private $staffs;
    private $message;

    public function index()
    {
        return view('admin.staff.add');
    }
    public function create(Request $request)
    {
        Staff::newStaff($request, $this->getStaffCode($request));
        return redirect('/add-staff')->with('message', 'New Staff info create successfully.');
    }
    public function manage()
    {
        $this->staff = Staff::orderBy('id', 'desc')->get();
        return view('admin.staff.manage', ['staffs' => $this->staff]);
    }
    public function detail($id)
    {
        $this->staff = Staff::find($id);
        return view('admin.staff.detail', ['staff' => $this->staff]);
    }
    public function updateStatus($id)
    {
        $this->staff = Staff::find($id);
        if ($this->staff->status == 1)
        {
            $this->staff->status = 0;
            $this->message = 'Staff status info unpublished successfully. ';
        }
        else
        {
            $this->staff->status = 1;
            $this->message = 'Staff status info published successfully. ';
        }
        $this->staff->save();
        return redirect('/manage-staff')->with('message', $this->message);
    }
    public function edit($id)
    {

    }
    public function update(Request $request,$id)
    {

    }
    public function delete($id)
    {
        $this->staff = Staff::find($id);
        if (file_exists($this->staff->image))
        {
            unlink($this->staff->image);
        }
        $this->staff->delete();
        return redirect('/manage-staff')->with('message', 'Staff info delete successfully.');
    }

    private function getStaffCode($request)
    {
        $this->staff = Staff::orderBy('id', 'desc')->first();
        if ($this->staff)
        {
            $this->id = $this->staff->id + 1;
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
}
