@extends('master.admin.master')

@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 ">Manage Teacher</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title">Buttons example</h4>
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->code}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->mobile}}</td>
                                <td>{{$teacher->address}}</td>
                                <td><img src="{{asset($teacher->image)}}" alt="" height="50" width="50"></td>
                                <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('teacher-detail', ['id' => $teacher->id])}}" class="btn btn-info btn-sm">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('teacher-status', ['id' => $teacher->id])}}" class="btn {{$teacher->status == 0 ? 'btn-primary' : 'btn-warning'}} btn-sm">
                                        <i class="{{$teacher->status == 1 ? 'fa fa-arrow-up' : 'fa fa-arrow-down'}}"></i>
                                    </a>
                                    <a href="{{route('edit-teacher',['id'=>$teacher->id])}}" class=" btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-teacher',['id'=>$teacher->id])}}" onclick="return confirm('Are you sure?')"  class=" btn btn-danger btn-sm">
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
