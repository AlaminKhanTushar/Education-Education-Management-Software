@extends('master.front.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body rounded-0">
                        <img src="{{asset($subject->image)}}" alt="" height="450" width="450">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body rounded-0">
                        <h1>{{$subject->title}}</h1>
                        <p>Course fee: {{$subject->fee}} &#2547;</p>
                        <a href="{{route('enroll-now',['id'=>$subject->id])}}" class="btn btn-success w-25 mx-auto">Enroll Now</a>
                        <hr/>
                        <h2>Trainer Name: {{$subject->teacher->name}}</h2>
                        <img src="{{asset($subject->teacher->image)}}" alt="" height="150" width="150">
                        <hr/>
                        <div>
                            {!! $subject->short_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0">
                        <h1>Course Module Detail</h1>
                        <hr/>
                        <div>
                            {!! $subject->long_description !!}
                        </div>
                        <hr/>
                        <a href="" class="btn btn-success w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
