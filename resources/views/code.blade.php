<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if (isset($space))

        <div style="text-align:center;">
            <p>Welcome <span style="color:#FFC400"><p>{{session('name')}}</p></span></p>
            <br><br>
            <p>your username : <span style="color:#040457">{{session('user')}}</span></p>
            <p>your password : <span style="color:#040457">{{session('password')}}</span></p>
            <p><a href="localhost:8000:/space/login">Login</a></p>
        </div>
        
    @else
    <div style="text-align:center;">
            <h4 style="color:#FFC400">To reset your password use this code</h4>
            <br>
            <span style="background:#222222;padding: 14px 17px;color: #FFF">{{session('code')}}</span>
        </div>
    @endif
    
    
</body>
</html>