@extends('master.admin.master')

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 text-center"> Edit Teacher</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <form action="{{route('update-teacher',['id'=>$teacher->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name" value="{{$teacher->name}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email" value="{{$teacher->email}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Mobile Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number"name="mobile" value="{{$teacher->mobile}}"  />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                                <textarea name="address" id="" cols="30" rows="5" class="form-control">{{$teacher->address}}</textarea>
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
                                <img src="{{asset($teacher->image)}}" alt="" height="100" width="150"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <label><input type="radio" {{$teacher->status == 1 ? 'checked' : ''}} name="status" value="1"/> Active</label>
                                <label><input type="radio" {{$teacher->status == 0 ? 'checked' : ''}} name="status" value="0"/> Inactive</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                            <div class="col-md-10">
                                <input name="date" class="form-control" type="date" value="<?php echo date('Y-d-m'); ?>" />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <input type="submit" name="btn" class="btn btn-success" value="Update Teacher Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
