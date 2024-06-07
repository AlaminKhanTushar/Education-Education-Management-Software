@extends('master.admin.master')
@section('body')
    <p class="text-success text-center">{{Session::get('message')}}</p>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div>
                    <div class="row">
                        <div class="col-lg-9 col-sm-8">
                            <div  class="p-4">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p> Dashboard</p>

                                <div class="text-muted">
                                    <p class="mb-1"><i class="mdi mdi-circle-medium align-middle text-primary mr-1"></i> If several languages coalesce</p>
                                    <p class="mb-1"><i class="mdi mdi-circle-medium align-middle text-primary mr-1"></i> Sed ut perspiciatis unde</p>
                                    <p class="mb-0"><i class="mdi mdi-circle-medium align-middle text-primary mr-1"></i> It would be necessary</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 align-self-center">
                            <div>
                                <img src="{{asset('/')}}admin/assets/images/crypto/features-img/img-1.png" alt="" class="img-fluid d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted mb-4"><i class="mdi mdi-bitcoin h2 text-warning align-middle mb-0 mr-3"></i> Bitcoin </p>

                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5>$ 9134.39</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0012 ( 0.2 % ) <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div id="area-sparkline-chart-1" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted mb-4"><i class="mdi mdi-ethereum h2 text-primary align-middle mb-0 mr-3"></i> Ethereum </p>

                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5>$ 245.44</h5>
                                        <p class="text-muted text-truncate mb-0">- 4.102 ( 0.1 % ) <i class="mdi mdi-arrow-down ml-1 text-danger"></i></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div id="area-sparkline-chart-2" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted mb-4"><i class="mdi mdi-litecoin h2 text-info align-middle mb-0 mr-3"></i> litecoin </p>

                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h5>$ 63.61</h5>
                                        <p class="text-muted text-truncate mb-0">+ 1.792 ( 0.1 % ) <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div id="area-sparkline-chart-3" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Notifications</h4>

                    <ul class="list-group" data-simplebar style="max-height: 390px;">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <img src="{{asset('/')}}admin/assets/images/companies/img-1.png" alt="" height="18">
                                                        </span>
                                </div>
                                <div class="media-body">
                                    <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting language</p>

                                    <div class="float-right">
                                        <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> Joseph</p>
                                    </div>
                                    <p class="text-muted mb-0">12 Mar, 2020</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <img src="{{asset('/')}}admin/assets/images/companies/img-2.png" alt="" height="18">
                                                        </span>
                                </div>
                                <div class="media-body">
                                    <h5 class="font-size-14">Cras ultricies mi eu turpis</h5>
                                    <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical cambridge</p>

                                    <div class="float-right">
                                        <p class="text-muted mb-0"><i class="mdi mdi-account mr-1"></i> Jerry</p>
                                    </div>
                                    <p class="text-muted mb-0"><input type="datetime-local"></p>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
