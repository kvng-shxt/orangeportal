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
            <h4 class="page-title">Edit Blacklist</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row justify-content-center">
    <div class="col-9">
        <div class="card">
            <div class="card-body">

                @if (\Session::has('message'))
                    <div class="alert alert-success">
                        <ul>
                            
                                <li>{!! \Session::get('message') !!}</li>
                        </ul>
                    </div>
                @endif
                <h4 class="header-title">Real Estate</h4>
                <ul class="nav nav-tabs nav-bordered mb-3">
                    
                </ul> <!-- end nav-->

                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <form action = "{{route('blacklist.update', $rec->id)}}" method = "POST"> 
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">

                                    <h3>Edit Blacklist</h3>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="mb-3">
                                                <label class="form-label"> Subscriber</label>
                                                <input name="subscriber" type="text" value="{{$rec->subscriber}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-9">
                                            <div class="mb-3">
                                                <label class="form-label">Partner</label>
                                                <select class="form-control " name="partner_id">
                                                    <option value="">Select Partner</option>
                                                    @if(isset($partners))
                                                        @foreach($partners as  $prt)
                                                            <option value="{{$prt->id}}" @if($rec->partner_id == $prt->id) selected="selected"@endif>{{$prt->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
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