@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reviews</h1>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">
                All Spaces Details
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
                                                <td>Space Name</td>
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
                                                    <td>{{$rev->name}}</td>
                                                    <td>{{$rev->created_at}}</td>
                                                    <td>
                                                        <a class="btn btn-warning" href="space/{{$rev->id}}/edit">Disable</a>
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
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                   <form class="form" action="/admin/spaces/add" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Space Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="description" placeholder="Enter description">
                        </div>
                        <button type="submit" class="btn btn-success">Add</button>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>

            </div>
            </div>

        

@endsection