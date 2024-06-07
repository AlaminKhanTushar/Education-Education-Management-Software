@extends('master.front.master')
@section('body')
    <section>
        <div class="container">
            <div class="row ">
                <div class="col-md-8 animate-box text-center">
                    <h3>Register Form</h3>
                    <form action="{{route('new-enroll',['id' => $id])}}" method="post">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="name">Full Name</label> -->
                                <input type="text" name="name" class="form-control" placeholder="Your Full name">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" name="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="mobile">Mobile</label> -->
                                <input type="number" name="mobile" class="form-control" placeholder="Your mobile number">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Conform Enroll" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
