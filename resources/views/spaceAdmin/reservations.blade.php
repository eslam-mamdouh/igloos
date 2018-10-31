@extends('spaceAdmin.master')
@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reservations</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <!-- content -->

            <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                All Reservations
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline     dt-bootstrap no-footer">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12">
                                <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <td>#ID</td>
                                                <td>Review</td>
                                                <td>User</td>
                                                <td>Created at</td>
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
        
                                            @foreach ($reviews as $rev )
                                                <tr>
                                                    <td>{{$rev->id}}</td>
                                                    <td>{{$rev->comment}}</td>
                                                    <td>{{$rev->first_name.' '.$rev->last_name}}</td>
                                                    <td>{{$rev->created_at}}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="space/{{$rev->id}}/edit">Disable</a>
                                                        <a class="btn btn-danger" href="space/{{$rev->id}}/delete">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
        
                                        </tbody>
        
                                    </table>
                                    {{$reviews->links()}}

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            

            <!-- content -->
        </div>
    </div>

@endsection