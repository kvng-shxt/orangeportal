@extends('layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                    </ol>
                </div>
                <h4 class="page-title">Charging</h4>
            </div>
        </div>
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        

        <div class="col-sm-4">
            <div class="card widget-flat bg-primary text-white">
                <div class="card-body">
                    <div class="float-right">
                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Successful Subscription for today</h6>
                    <h3 class="mt-3 mb-3">{{$succSub}}</h3>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card widget-flat bg-info text-white">
                <div class="card-body">
                    <div class="float-right">
                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Successful Subscription for this week</h6>
                    <h3 class="mt-3 mb-3">{{$weekSub}}</h3>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card widget-flat bg-success text-white">
                <div class="card-body">
                    <div class="float-right">
                        <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">Total Successful Suscription</h6>
                    <h3 class="mt-3 mb-3">{{$sub}}</h3>
                </div>
            </div>
        </div>
    
    </div>
    <!-- end row-->
@endsection



{{-- <div class="row">
    <div class="col-sm-4">
        <div class="card tilebox-one">
            <div class="card-body">
                <i class="dripicons-basket float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                <h2 class="m-b-20">1,587</h2>
                <span class="badge badge-primary"> +11% </span> <span class="text-muted">From previous period</span>
            </div> <!-- end card-body-->
        </div> <!--end card-->
    </div><!-- end col -->

    <div class="col-sm-4">
        <div class="card tilebox-one">
            <div class="card-body">
                <i class="dripicons-box float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                <h2 class="m-b-20">$<span>46,782</span></h2>
                <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
            </div> <!-- end card-body-->
        </div> <!--end card-->
    </div><!-- end col -->

    <div class="col-sm-4">
        <div class="card tilebox-one">
            <div class="card-body">
                <i class="dripicons-jewel float-right text-muted"></i>
                <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                <h2 class="m-b-20">1,890</h2>
                <span class="badge badge-primary"> +89% </span> <span class="text-muted">Last year</span>
            </div> <!-- end card-body-->
        </div> <!--end card-->
    </div><!-- end col -->

</div> --}}
