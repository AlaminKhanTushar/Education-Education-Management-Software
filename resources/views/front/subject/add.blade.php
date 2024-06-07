@extends('master.teacher.master')
@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18 text-center">Add New Subject</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <form action="{{route('new-subject')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Subject Title</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Subject Code</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Subject Fee</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number"name="fee" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Short Description</label>
                            <div class="col-md-10">
                                <textarea name="short_description" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-md-2 col-form-label">Long Description</label>
                            <div class="col-md-10">
                                <textarea name="long_description" id="" cols="30" rows="5" class="form-control summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" name="image" class="form-control-file" accept="image/*"/>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <label class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <input type="submit" name="btn" class="btn btn-success" value="Create new Subject">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
