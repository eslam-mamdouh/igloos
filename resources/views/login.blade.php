{{--  @if (!Auth::check())
    
@endif  --}}
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          
        <title>Log in</title>
        <!--<link href = "{{asset('bootstrap/bootstrap.css')}}" rel="stylesheet">-->
        <link href = "{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href = "{{asset('css/login.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src = "<?php echo asset('js/jquery-3.1.1.js'); ?>"></script>
        <!-- Styles -->
        <style>

        </style>
  
    </head>
    <body>
         {{--  @include('navbar')  --}}
        <div class="container">
            <form class="form-inline" role="form" action="dologin" method="POST"> 
                @csrf
                <h1>Log in</h1><br><br>
                <label for="Username" class="mb-2 mr-sm-2">Username:</label><br>
                <input type="text" name="email" class="form-control mb-2 mr-sm-2" placeholder="Enter Username" id="Username">
                @if ($errors->has('email'))
                    <p style="color:red" class="invalid-feedback danger" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </p>
                @endif
                <br><br>
                <label for="password" class="mb-2 mr-sm-2">Password:</label><br>
                <input type="text" name="password" class="form-control mb-2 mr-sm-2" placeholder="Enter Password" id="password">
                @if ($errors->has('password'))
                    <p style="color:red" class="invalid-feedback danger" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif
                <br><br>
                <div class="form-check mb-2 mr-sm-2">
                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember me</label>
                </div>
                <br><br>
                <button class="btn btn-default" id="btn-login">Log in</button>
                <a href="#">Forget Your Password</a>
                <br><br>
                <a id="signup-link" href="#">Sign up</a>
            </form>
        </div>
         {{--  @include('footer')  --}}
    </body>
</html>
