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
        background: #f4f7fa;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .register-container {
        width: 350px;
        margin: 60px auto;
        border-radius: 8px;
        box-shadow: 10px 10px 20px 17px rgba(63, 63, 64, 0.7);
         padding: 30px 25px;
    }
    .register-form {
        display: flex;
        flex-direction: column;
    }
    .form-title {
        text-align: center;
        margin-bottom: 20px;
        color: white;
    }
    .form-group {
        margin-bottom: 18px;
    }
    .form-label {
        display: block;
        margin-bottom: 6px;
        color: white;
        font-size: 18px;
    }
    .form-input {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 15px;
        box-sizing: border-box;
    }
 
    .bgattach{
        background: url('img/v2.jpg');
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

    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}'
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}'
        });
    </script>
@endif

   <div class="register-container bg-transparent">
        <form  method="POST" class="register-form" action="{{ route('register.store') }}">
            @csrf
            <h2 class="form-title">Register</h2>
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input class="form-input" type="text" id="username" name="username" placeholder="your username" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-input" type="email" id="email"  placeholder="your email" name="email" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-input" type="password" id="password" name="password" required placeholder="your password">
            </div>
              <div class="form-group">
                <label class="form-label" for=" confirm_password"> Confirm Password</label>
                <input class="form-input" type="password" id="password" name="cnf_password" required placeholder="confirm password">
            </div>
            <div class="form-group">
            <button class="btn text-light" style="background-color: #192841;">Register</button>
            <button class="float-end btn mybtn" style="background-color: #192841;"><a href="login.php" class=" text-light text-decoration-none">Login</a></button>
            </div>
        </form>
    </div>

    @endsection
    @extends('header')
    

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
