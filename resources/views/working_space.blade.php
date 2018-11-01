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
        <link rel="stylesheet" type="text/css" href="\css\working_space.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
       
    </head>
    <body  data-spy="scroll" data-target="#myScrollspy" data-offset="20">
      <!--------------------------------- base navbar-------------------------------------------------------------->
             
    
      <!----------------------------------------------------------------------------------------------------------->
    
      <!----------------------------------------navbar left---------------------------------------------------------------->
      <div class="container">
        <div class="row-profile">
            <div class="left-side col-sm-3">
                <div  class="profile-sidebar" style="background-color:#212121;left:0px;">
                    <div class="profile-userpic">
                      <img src="\images\galaxi.png" class="img-circle" alt="" width="50px">
                    </div>
                  
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name" style="color:white;">
                            Galaxy
                        </div>
                     
                    </div>
                    <div class="profile-usermenu" >
                        <ul class="nav"id="myScrollspy">
                            <li class="parts"> <a href="#home"><i class="glyphicon glyphicon-home" ></i>  About</a></li>
                            <li  style=" width: 200px;left: 40px;  " > <a href="#booking"><i class="glyphicon glyphicon-pencil" ></i>   Booking</a></li>
                           <li class="parts" >  <a href="#gallery"><i class="glyphicon glyphicon-th" ></i>   Gallery </a> </li>
                           <li class="parts" >  <a href="#reviews">  <i class="glyphicon glyphicon-align-left" ></i>    Reviews</i></a></li>
                        </ul>
                      </div>
                </div>
            </div>
      </div>
       <!-------------------------------------------------------------------------------------------------------------------------->
       <!-------------------------------------------------------------co-workspace information--------------------------------------->
       <div class="col-sm-9" id="bar">
    <div  id="home" >
      <br>
<div class="information"  >
  <h1>Galaxi</h1>
 <p class="about-workspace">  is a common work space open to all (students-graduation projects - activites-.....)</p>
<br>
<h3>work hours</h3>
<p><code>10</code> <kbd>a.m.</kbd> :<code>10</code>  <kbd>p.m.</kbd></p>
<br>
<ul>
    <li class="information1">  Free Wifi <code>16 MB</code> </li>
    <li class="information1"> Engineering tools </li>
    <li class="information1">Hot &Cold Drinks</li>
    <li class="information1"> Meeting Space</li>
    <li class="information1"> Workshops / Training Room</li>
    <li class="information1">  Projector</li>
</ul>
<br>


</div>
</div>
<br>
<br>
<br>
<br>
<!---------------------------------------------------------------------------------------------------------------------------------------->

<hr> 

<!-----------------------------------------------gallary--------------------------------------------------------->

<div id ="gallery" >  
  <br>
  <br>
  <br>
  <h1 style="margin-bottom:10px; float: left;">Gallery</h1>
<div class="slider">

    <figure class="slider__item"><img class="slider__image" src="images/42686567_1198942416929554_649513249745666048_n.jpg?image=#{itemsImg}"/>
    
    </figure>
    <figure class="slider__item"><img class="slider__image" src="images/42649397_1198942550262874_6466097182800871424_n.jpg?image=#{itemsImg}"/>
    
    </figure>
    <figure class="slider__item"><img class="slider__image" src="images/42631806_1198942606929535_3869716523824185344_n.jpg?image=#{itemsImg}"/>
     
    </figure>
    <figure class="slider__item"><img class="slider__image" src="images/42631156_1198942476929548_8366076412586622976_n.jpg?image=#{itemsImg}"/>
     
    </figure>
    <figure class="slider__item"><img class="slider__image" src="images/42617464_1198942786929517_8442863706215284736_n.jpg?image=#{itemsImg}"/>
     
    </figure>

  <div class="slider__btn"></div>
</div>
 </div>
  <hr>
<!--------------------------reviwes---------------------------------------------------------------------------------> 
<br>
<br>
  <br>
<div id ="reviews" >
   <br>
   <br>
   <br>
  
   
          <h1 style="margin-top: 20px;"> Reviews</h1>
      <div class="carousel-reviews broun-block">
          <div class="container">
              <div class="row">
                  <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                  
                      <div class="carousel-inner">
                          <div class="item active">
                            <div class="col-md-3 col-sm-3">
                          <div class="block-text rel zmin">
                            <a title="" href="#" class="reviewers">Ella Mentree</a>
                        <br>
                        
                         @foreach($reviews as $review)
                           <p> {{ $review->comment}}</p>
                          @endforeach
                          
                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                        </div>
                    <div class="person-text rel">
                              <img src="images/avtar.png" class="img-circle" width="100px"/>
                  
                    </div>
                  </div>
                       
                          </div>                    
                      </div>
                      <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>

                      </a>
                    
                      <button type="button" class="button-reviews" data-toggle="collapse" data-target="#leave">leave your Review</button>
                      <form id="leave" action="/review" method="POST" class="collapse">
                        <br>
                        @csrf
                        <input type="hidden" name="user_id" value="1">
                        <input type="hidden" name="space_id" value="1">
                        <input name="comment" type="text" placeholder="Review" class="rev">
                        <button type="submit" class="send">save</button>
                        </form>
                  </div>
              </div>
          </div>
      </div>
</div>
<br>
<br>
<br>
<br>

<!------------------------------------------------------------------------------------------------------------------------------->
 <!------------------------------------------- form of booking ---------------------------------------------------------------------------------------------------->
 <div id ="booking">
   <br>
   <br>
   <div class="booking">
   <br>
 <h1 style="margin-left: 100px;">Booking</h1>
  
<br>
  <form name="myform"  onsubmit="return check()" method="POST" action="/space">
  @csrf
  <input type="hidden" name="user_id" value="1">
  <input type="hidden" name="space_id" value="1">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"  ></i></span>
      <input type="text" placeholder="Name" class="form-control" name="name"> 
      </div>
      <br>
      <div class="input-group">

      <span class="input-group-addon"><i class="fa fa-users fa "></i></span>
      <input type="number" placeholder="Number Of Individuals" class="form-control" name="people_num" >
    </div>
   <br>
     <div class="input-group">
         
     <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
     <input type="date" class="form-control"  name="date">
      </div>
      <br>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
       <input type="time" class="form-control" name="time" >
  </div>

  <br>
   <div class="btn-group sellect" role="group" >

      <input type="botton" class="btn btn-default" name="place" value="Out" >
      <input type="botton" class="btn btn-default" name="place" value="Room">
      <input type="botton" class="btn btn-default"name="place" value="Balkon">
    </div>
    <div>
    <input type="hidden" name="user_id" value="1">
    <input type="hidden" name="space_id" value="1">
      <button class="button" type="submit" style=" margin-left: 750px;"> Book </i></button>
 </div>
  </form>
</div>
</div>
</div>
</div>
</div>
<!---------------------------------------------------------------------------------------------------------------->


<!-------------------------------------------------------------------------------------------------------------------------------------------------->
        <script  src="js\co-work space.js"></script>
    </body>
</html>
@endsection
