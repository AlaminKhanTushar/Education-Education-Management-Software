@extends('master.admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Teacher Detail</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Teacher Name</th>
                                    <td>{{$teacher->name}}</td>
                                </tr>
                                <tr>
                                    <th>Teacher Code</th>
                                    <td>{{$teacher->code}}</td>
                                </tr>
                                <tr>
                                    <th>Teacher Email</th>
                                    <td>{{$teacher->email}}</td>
                                </tr>
                                <tr>
                                    <th>Teacher Mobile</th>
                                    <td>{{$teacher->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Teacher Address</th>
                                    <td>{!! $teacher->address !!}</td>
                                </tr>
                                <tr>
                                    <th>Teacher Image</th>
                                    <td>
                                        <img src="{{asset($teacher->image)}}" alt="" height="200" width="200">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
