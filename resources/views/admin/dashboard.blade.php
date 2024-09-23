@extends('admin.master')
@section('content')
<div class="content-body default-height">
    <!-- row -->
    <div class="container-fluid">

        <div class="form-head d-flex mb-3 mb-md-5 align-items-start flex-wrap justify-content-between">
            <div class="me-auto d-lg-block">
                <h3 class="text-primary font-w600">Welcome to Movie Website</h3>
                <p class="mb-0">Admin Dashboard</p><br>
            </div>
            
            <div class="input-group search-area ms-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
            </div>
                <div class="col-xl-6 col-xxl-6">
                    <div class="row">
                                <div class="col-xl-6 col-lg-6  col-xxl-12 col-sm-6">
                                    <div class="app-stat card bg-danger">
                                        <div class="card-body  p-4">
                                            <div class="media flex-wrap">
                                                <span class="me-3">
                                                    <i class="flaticon-381-calendar-1"></i>
                                                </span>
                                                <div class="media-body text-white text-end">
                                                    <p class="mb-1">users</p>
                                                    <h2 class="text-white">{{$users}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                                <div class="col-xl-6 col-lg-6 col-xxl-12 col-sm-6">
                                    <div class="app-stat card bg-success">
                                        <div class="card-body p-4">
                                            <div class="media flex-wrap">
                                                <span class="me-3">
                                                    <i class="flaticon-381-diamond"></i>
                                                </span>
                                                <div class="media-body text-white text-end">
                                                    <p class="mb-1 text-nowrap">Bookings</p>
                                                    <h2 class="text-white">{{$bookings}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <div class="app-stat card bg-info">
                                        <div class="card-body p-4">
                                            <div class="media flex-wrap">
                                                <span class="me-3">
                                                    <i class="flaticon-381-heart"></i>
                                                </span>
                                                <div class="media-body text-white text-end">
                                                    <p class="mb-1 text-nowrap">Total movies</p>
                                                    <h2 class="text-white">{{$movies}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                    <div class="app-stat card bg-primary">
                                        <div class="card-body p-4">
                                            <div class="media flex-wrap">
                                                <span class="me-3">
                                                    <i class="flaticon-381-user-7"></i>
                                                </span>
                                                <div class="media-body text-white text-end">
                                                    <p class="mb-1">Total Theaters</p>
                                                    <h2 class="text-white">{{$theaters}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
        </div>

    </div>
</div>
@endsection



