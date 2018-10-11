 <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src = "<?php echo asset('js/jquery-3.1.1.js'); ?>"></script>

      <link href = "{{asset('css/homePage.css')}}" rel="stylesheet">
    </head>
    <body>
<div id="topNavbar">
            <div id="Logo"></div>
                 <div class="navbar-btns">
                    <img src="/images/IGLOOS-logo-white.png" alt="IGLOOS" class="logo">
                    <button class="btn" id="signupbtn" href="#signup-form"><a href="{{url('/signup')}}">Sign Up</a></button>
                     <button class="btn" id="defbtn" href="#login-form"><a href="{{url('/login')}}">Login</a></button>
                    <button class="btn" id="defbtn" href="#clients-section">Clients</button>
                    <button class="btn" id="defbtn" href="#about-section">About</button>
                 </div>
        </div>
        </body>
</html>