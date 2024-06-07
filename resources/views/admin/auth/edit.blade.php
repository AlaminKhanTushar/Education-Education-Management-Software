@extends('master.admin.master')

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 text-center">Edit User</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <form action="{{route('update-user',['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name" value="{{$user->name}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Email Address</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email" value="{{$user->email}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Phone Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel"name="phoneNumber"value="{{$user->phoneNumber}}"  />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                                <textarea name="address" id="" cols="30" rows="5" class="form-control">"{{$user->address}}"</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password"name="password" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" name="image" class="form-control-file" accept="image/*"/>
                                <img src="{{asset($user->profile_photo_path)}}" alt="" height="100" width="150"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <label><input type="radio" {{$user->status == 1 ? 'checked' : ''}} name="status" value="1"/> Active</label>
                                <label><input type="radio" {{$user->status == 0 ? 'checked' : ''}} name="status" value="0"/> Inactive</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                            <div class="col-md-10">
                                <input name="date" class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <input type="submit" name="btn" class="btn btn-success" value=" Update user">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
