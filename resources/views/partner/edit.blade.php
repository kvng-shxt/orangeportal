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
                    <li class="breadcrumb-item"><a href="{{url('home')}}">Orange</a></li>
                </ol>
            </div>
            <h4 class="page-title">Partner</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row justify-content-center">
    <div class="col-9">
        <div class="card">
            <div class="card-body">

                <div class="col-md-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div>
                <h4 class="header-title">Edit Partner</h4>
                <ul class="nav nav-tabs nav-bordered mb-3">
                    
                </ul> <!-- end nav-->

                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <form action = "{{route('partner.update', $ptnr->id)}}" method = "POST"> 
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    
                                    <h3>Add Partner</h3>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="mb-3">
                                                <label class="form-label"> Name</label>
                                                <input name="name" type="text" value="{{$ptnr->name}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="mb-3">
                                                <label class="form-label"> Endpoint</label>
                                                <input name="endpoint" type="text" value="{{$ptnr->endpoint}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="mb-3">
                                                <label class="form-label"> Username</label>
                                                <input name="username" type="text" value="{{$ptnr->username}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="mb-3">
                                                <label class="form-label"> Password</label>
                                                <input name="password" type="password" value="{{$ptnr->password}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                   
                                    <div class="col-auto">
                                        <button type="submit" name = "submit" value = "create" class="btn btn-primary mb-9">Update</button>
                                    </div>
                            
                                </form>
                            </div> <!-- end col -->

                            
                        </div>
                        <!-- end row-->                      
                    </div> <!-- end preview-->
                </div> <!-- end tab-content-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection