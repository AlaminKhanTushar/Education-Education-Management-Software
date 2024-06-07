@extends('master.admin.master')

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 text-center">Add New User</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <form action="{{route('new-user')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Email Address</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Phone Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel"name="phoneNumber" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                                <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="password"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" name="image" class="form-control-file" accept="image/*"/>
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
                                <input type="submit" name="btn" class="btn btn-success" value="Create new user">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
