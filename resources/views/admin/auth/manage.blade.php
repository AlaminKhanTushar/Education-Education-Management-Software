@extends('master.admin.master')

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <p class="text-success text-center">{{Session::get('message')}}</p>
                <h4 class="mb-0 font-size-18 ">Manage User</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title">Buttons example</h4>

                    <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phoneNumber}}</td>
                            <td>{{$user->address}}</td>
                            <td><img src="{{asset($user->profile_photo_path)}}" alt="" height="50" width="50"></td>
                            <td>{{$user->date}}</td>
                            <td>{{$user->status == 1 ? 'Active' : 'Inactive'}}</td>
                            <td>
                                <a href="{{route('edit-user',['id'=>$user->id])}}" class=" btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('delete-user',['id'=>$user->id])}}" onclick="return confirm('Are you sure?')"  class=" btn btn-danger btn-sm {{$user->id == 1 ? 'disabled' : ''}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->

@endsection
