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
                <h4 class="page-title">Subscription</h4>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="tab-content">
                        <div class="tab-pane show active" id="buttons-table-preview">
                            <table id="datatable-buttons" class="table data-table table-striped dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Subscriber</th>
                                    <th>Amount</th>
                                    <th>Partner</th>
                                    <th>Status</th>
                                    
                                </tr>
                                </thead>

                                <tbody>
                                    @if(isset($subs))
                                    @foreach($subs as $sub)
                                        <tr>
                                            <td>{{$sub->subscriber}}</td>
                                            <td>{{$sub->amount}}</td>
                                            <td>{{$sub->partners}}</td>
                                            <td>
                                                @if ($sub->sub_status === 1)
                                                    <button type="submit" class="btn btn-success" disabled>Success</button>
                                                @else
                                                    <button type="submit" class="btn btn-danger" disabled>Failed</button></form>
                                                @endif
                                            </td>
                                            
                                        </tr>
                                    @endforeach

                                @endif
                                </tbody>
                            </table>
                        </div> <!-- end preview-->

                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
@endsection