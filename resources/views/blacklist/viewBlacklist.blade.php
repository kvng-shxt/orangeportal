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
                <h4 class="page-title">View Blacklist</h4>
            </div>
            <div>
                <div class="col-md-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div>
            </div>
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
                                    
                                    <th>Partner</th>
                                    <th>Subscriber</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                    @if(isset($black))
                                    @foreach($black as $blk)
                                        <tr>
                                            <td>{{$blk->partners}}</td>
                                            <td>{{$blk->subscriber}}</td>
                                            <td>
                                                <a href="{{route('blacklist.edit',$blk->id)}}" class="btn btn-primary btn-sm phils" ><span class="uil-edit"></span></a>

                                                <form method="post" action="{{route('blacklist.destroy',$blk->id)}}">
                                                    @csrf
                                                    @method('delete') 
                                                    <input type="hidden" name="id" value="{{$blk->id}}">
                                                    <button name="submit" onclick="return confirm('Are you sure?')" value="delete" class="btn btn-danger btn-sm"><span class="uil-trash"></span></button>
                                                </form>
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