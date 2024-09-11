<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login : New Swati Carriers</title>
    <link href="{{ URL::asset('img/logo/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ URL::asset('adminAssets/css/main.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="panda">
        <div class="ear"></div>
        <div class="face">
            <div class="eye-shade"></div>
            <div class="eye-white">
                <div class="eye-ball"></div>
            </div>
            <div class="eye-shade rgt"></div>
            <div class="eye-white rgt">
                <div class="eye-ball"></div>
            </div>
            <div class="nose"></div>
            <div class="mouth"></div>
        </div>
        <div class="body"></div>
        <div class="foot">
            <div class="finger"></div>
        </div>
        <div class="foot rgt">
            <div class="finger"></div>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        <div class="hand"></div>
        <div class="hand rgt"></div>
        <h1>Admin Login</h1>
        <div class="form-group">
            <input type="email" name="email" placeholder="User Name" required class="form-control" />
        </div>
        <div class="form-group">
            <input id="password" type="password" placeholder="password" required class="form-control" />
            <input type="submit" class="btn" value="Login">
        </div>
    </form>
    <script>
        // Adding class 'up' when focusing on password input
        $('#password').focusin(function() {
            $('form').addClass('up');
        });
        $('#password').focusout(function() {
            $('form').removeClass('up');
        });

        // Panda Eye move
        $(document).on("mousemove", function(event) {
            var dw = $(document).width() / 15;
            var dh = $(document).height() / 15;
            var x = event.pageX / dw;
            var y = event.pageY / dh;
            $('.eye-ball').css({
                width: x,
                height: y
            });
        });
    </script>
</body>

</html>
