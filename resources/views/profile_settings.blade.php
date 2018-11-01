
@extends('master')
@section('content')
<html>
    <head>
  
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="\css\profile_settings.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
      <body id ="profile">     
<div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="\images\images.jpg" alt="sorry" class="img-circle"/>
                        <button class="btn_"><i class="fa fa-camera"></i>
                     <input type="file"class="file form-control-file">  </button> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h3 style=" margin-top: 80px;"> 
                                Profile
                                </h3>
                               
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"  class="active">
                                <a class="nav-link " id="home-tab"  data-toggle="tab" href="#home"  >About</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" id="Favorites-tab" data-toggle="tab" href="#Favorites"  >Favorites</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews"  >Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting"  >Settings</a>
                            </li>
                       
                          
                        </ul>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                      <br>
                      <br>
                        <a href="#"  type="_blank"w> <i  class="fa fa-facebook-square fa"  style="font-size:30px;margin-left: 20px;">  </i></a>
                        <a href="#" type="_blank"><i class="fa fa-instagram fa" style="font-size:30px;margin-left: 20px;" ></i></a>
                        <a href="# " type="_blank"><i class="fa fa-google-plus-square fa" style="font-size:30px;margin-left: 20px;" ></i></a>
                      <a href="#" type="_blank"> <i class="fa fa-twitter fa"  style="font-size:30px ;margin-right:10px;margin-left: 20px;" ></i> </a>
      
             
                    
                    </div>
                </div>
                <div class=" right col-md-8" >
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6"  style=" width: 150px;">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->first_name . " ". $user->last_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"  style=" width: 150px;">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"  style=" width: 150px;">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$user->phone}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"  style=" width: 150px;">
                                            <label>collage</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>computer and information science</p>
                                        </div>
                                    </div>
                                     <div class="row">
                                <div class="col-md-6"  style=" width: 150px;">
                                    <label>Biography</label><br/>
                                    </div>
                                    <div class="col-md-6">
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                        
                        <div  class=" tab-pane fade" id="Favorites" role="tabpanel" aria-labelledby="Favorites-tab">
                                <a href="" >galaxi</a><br/><br/>
                                <a href="">alasca</a><br/><br/>
                                <a href="">ibda3</a><br/><br/>
                        </div>
                       
                        <div  class=" tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            
      <div class="media" class="row">
  <div class="media-left"class="col-md-6">
  <img src="\images\galaxi.png" alt="Avatar" class="avatar" class="img-circle" width="90px">
  </div>
  <div class="media-body" class="col-md-6">
      <br>
    <h4 class="media-heading">Galaxi</h4>
    <h5 style="float:left"> 12:06  </h5>
      <h6>  thoursday</h6>
    <br>
    @foreach($reviews as $review)
   <p> {{ $review->comment}}</p>
      @endforeach
  </div>
  </div>
  <hr>

        
      
  </div>
  <div  class=" tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
        <form method="POST" action="update/{{$user->id}}">
                {{ csrf_field() }}
                <div class="form-row">
                  <div  class="col-md-6">
                    <input type="text" class="form-control" name="first_name" placeholder="First name" value="{{$user->first_name}}">
                  </div>
                  <div  class="col-md-6">
                    <input type="text" class="form-control" name="last_name" placeholder="Last name" value="{{$user->last_name}}">
                  </div>
                </div>
                  <br>
                  <div class="form-group">
                      <br>
                      <br>
                        <input type="password"  class="password form-control" name="password" placeholder="password" value="{{$user->password}}">
                        <small id="passwordHelpInline" class="text-muted" >
                          Must be 8-20 characters long.
                        </small>
                        
                        <br>
                        <br>
                        <input type="email"  class="password form-control" name="email" placeholder="E-mail" value="{{$user->email}}">
                        <br>
                        <br>
                        <input type="text"  class="password form-control"placeholder="College" >
                        <br>
                        <br>
                        <input type="number"  class="password form-control" name="phone" placeholder="Phone" value="{{$user->phone}}" >
                        <br>
                        <br>
                        <textarea class="area form-control" placeholder="Biography" rows="7" ></textarea>
                      </div>
                  
                                            <br>
                                            <br>
                                          <div>
                                                <button class="button" type="submit">Update</button>
                                          </div>
              </form>
                </div>                          
                                           
  </div>
</div>

                           
                        </div>
                    </div>
                </form> 
                </div>
</body>
                </html>
@endsection
