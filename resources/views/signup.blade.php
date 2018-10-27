<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          
        <title>Log in</title>
        <!--<link href = "{{asset('bootstrap/bootstrap.css')}}" rel="stylesheet">-->
        <link href = "{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href = "{{asset('css/signup.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src = "<?php echo asset('js/jquery-3.1.1.js'); ?>"></script>
        <!-- Styles -->
        <style>

        </style>
  
    </head>
    <body>
        <div class="container">
            <form class="form" role="form" method="POST" action="/dosignup"> 
                {{ csrf_field() }}
                @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <div class="col-alert alert-danger">{{$error}}</div>
                @endforeach
                @endif

                @if(@session('response'))
                <div class="col-md-8 alert alert-success">{{@session('success')}}</div>
                @endif
                <h1>Sign Up</h1><br><br>
                 <div class="form-group">
                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name" id="firstName">
                </div>
                <div class="form-group">
                    <input type="text"  name="lname" class="form-control" placeholder="Enter Last Name" id="lastName">
                </div>
                
                <div class="form-group">
                    <input type="email"  name="email" class="form-control" placeholder="Enter E-mail" id="email">
                </div>
                
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" id="phone">
                </div>
                
                <div class="form-group">
                    <input type="text"  name="password" class="form-control" placeholder="Enter Password" id="password">
                </div>
                <button type="submit" class="btn btn-default" id="btn-login">Sign up</button>
            </form>
        </div>
    </body>
</html>
