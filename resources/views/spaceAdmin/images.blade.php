@extends('spaceAdmin.master')
@section('content')

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Images</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <!-- content -->

            <div class="col-sm-12" style="text-align:center; border-bottom: 1px solid #DDD;margin-bottom: 20px;padding: 15px">
                <img class="img-circle" width="120px" height="120px" src="../images/galaxi.jpg">
                <br><br>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
            <div class="images col-sm-12" style="padding:15px;">
                    <form action="/space-admin/images/upload" method="POST" enctype="multipart/form-data" style="padding: 15px;margin:10px 45%;">
                        @csrf    
                        <input type="file" name="image">
                            <br>
                            <button class="btn btn-success" type="submit">Add Image</button>
                        </form>
                <p style="text-align:center;border-bottom:1px solid #DDD;">
                </p>

                @foreach ($images as $img)
                    
                    <div class="col-sm-3 image">
                        <img src="../{{$img->img_url}}" width="200px" height="150" style="border-radius:25px; margin: 15px;"> 
                        
                        <a href="/space-admin/images/{{$img->id}}/delete" class="btn btn-danger" style="width:85%; margin-left: 20px">Delete</a>
                    </div>
                @endforeach☻
                
            </div>



            <!-- content -->
        </div>
    </div>

@endsection