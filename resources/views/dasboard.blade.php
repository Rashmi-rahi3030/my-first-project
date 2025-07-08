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

    </head>
    <body>
        
    @extends('footer')
    @section('midcontent')
    <div class="shadow w-25 mx-auto justify-content-center text-center mt-5 p-2">
 <h2>Welcome, {{ Auth::user()->name }}</h2>


    <img src="pics/user.png" class="img-fluid card-img" style="width:30px;">

<p>Email: {{ Auth::user()->email }}</p>

<a href="{{ route('logout') }}">Logout</a>
</div>
    @endsection

    @extends('header')

        <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>