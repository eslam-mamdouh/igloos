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
         @include('navbar')
        <div class="container">
            <form class="form-inline" role="form" method="POST" action="{{ url('/register') }}"> 
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
                 <label for="firstName" class="mb-2 mr-sm-2">First Name:</label><br>
                <input type="text" name="Fname" class="form-control mb-2 mr-sm-2" placeholder="Enter First Name" id="firstName">
                <br><br>
                <label for="lastName" class="mb-2 mr-sm-2">Last Name:</label><br>
                <input type="text"  name="Lname" class="form-control mb-2 mr-sm-2" placeholder="Enter Last Name" id="lastName">
                <br><br>
                <label for="Username" class="mb-2 mr-sm-2">Username:</label><br>
                <input type="text"  name="username" class="form-control mb-2 mr-sm-2" placeholder="Enter Username" id="Username">
                <br><br>
                <label for="email" class="mb-2 mr-sm-2">E-mail:</label><br>
                <input type="text"  name="email" class="form-control mb-2 mr-sm-2" placeholder="Enter E-mail" id="email">
                <br><br>
                <label for="phone" class="mb-2 mr-sm-2">Phone:</label><br>
                <input type="text" name="phone" class="form-control mb-2 mr-sm-2" placeholder="Enter your phone number" id="phone">
                <br><br>
                <label for="password" class="mb-2 mr-sm-2">Password:</label><br>
                <input type="text"  name="password" class="form-control mb-2 mr-sm-2" placeholder="Enter Password" id="password">
                <br><br>
                <label for="conpassword" class="mb-2 mr-sm-2">Confirm-Password:</label><br>
                <input type="text" name="Conpassword" class="form-control mb-2 mr-sm-2" placeholder="Re-Enter Password" id="conpassword">
                <br><br>
                <button type="submit" class="btn btn-default" id="btn-login">Sign up</button>
            </form>
        </div>
         @include('footer')
    </body>
</html>
