
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/emailFormStyleSheet.css">
    <!-- <script src="igloosHP.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

        <div id="theForm">

                <div id="formBase">
                <form id="email-form" action="password/sendCode" method="POST">
                    <img src="images/email_.png" id="email">
                    <p id="form-header-1">Enter your email address & we'll</p>
                    <p id="form-header-2">send you the password reset code</p>
                    @csrf
                    <input id="textArea" name="email" placeholder="someone@example.com" type="email" required> <br>
                    <button id="sendBtn" type="submit">Send me a code</button>
                </form>
                </div>
            </div>
</body>
</html>

