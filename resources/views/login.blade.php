<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

            <style>
        body {
             font-family: Arial;
            }
        .login-box {
            width: 300px; 
            margin: 100px auto;
            background: #fff;
             padding: 30px;
            border-radius: 10px;
            box-shadow: 10px 10px 20px 17px rgba(63, 63, 64, 0.7);
        }
        input[type="email"], input[type="password"] {
            width: 100%; 
            padding: 10px; 
            margin: 10px 0;
        }

        .error { color: red; 
            text-align: center;
         }

          
    .bgattach{
        background: url('pics/login.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    </style>
    </head>
<body class="bgattach">

       @extends('footer')
    @section('midcontent')


    
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif


    <div class="login-box bg-transparent">
        <div> 
             <img src="pics/user.png" class="img-fluid card-img w-50 d-block mx-auto">
        </div>
                <h2>Login</h2>
        <form method="POST" action="{{ route('login.submit')}}">
            @csrf
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="checkbox" name="checkbox"> Remember me
            <input type="submit" name="btn" class="btn text-light w-100" value="Login" style="background-color: #192841">

        </form>
    </div>
        @endsection
    @extends('header')

                <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>