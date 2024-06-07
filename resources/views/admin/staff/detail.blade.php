@extends('master.admin.master')

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 text-center">{{$staff->name}}</h4>
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
                      <tr>
                            <th>Staff Id</th>
                            <td>{{$staff->id}}</td>
                        </tr>
                        <tr>
                            <th>Staff Name</th>
                            <td>{{$staff->name}}</td>
                        </tr>
                        <tr>
                            <th>Staff Code </th>
                            <td>{{$staff->code}}</td>
                        </tr>
                        <tr>
                            <th>Staff Email</th>
                            <td>{{$staff->email}}</td>
                        </tr>
                        <tr>
                            <th>Staff Mobile</th>
                            <td>{{$staff->mobile}}</td>
                        </tr>
                        <tr>
                            <th>Staff Address</th>
                            <td>{{$staff->address}}</td>
                        </tr>
                        <tr>
                            <th>Image Image</th>
                            <td><img src="{{asset($staff->image)}}" alt="" height="150" width="200"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
