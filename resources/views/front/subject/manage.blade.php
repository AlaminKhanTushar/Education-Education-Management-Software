@extends('master.teacher.master')

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 ">Manage Subject</h4>
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
                            <th>Subject Title</th>
                            <th>Code</th>
                            <th>Fee</th>
                            <th>Teacher Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$subject->title}}</td>
                                <td>{{$subject->code}}</td>
                                <td>{{number_format($subject->fee)}}</td>
                                <td>{{$subject->teacher->name}}</td>
                                <td><img src="{{asset($subject->image)}}" alt="" height="50" width="50"></td>
                                <td>{{$subject->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('edit-subject',['id'=>$subject->id])}}" class=" btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-subject',['id'=>$subject->id])}}" onclick="return confirm('Are you sure?')"  class=" btn btn-danger btn-sm">
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
    </div>
@endsection
