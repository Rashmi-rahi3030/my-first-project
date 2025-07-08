<!DOCTYPE html>
<html lang="en">
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
    @yield('marquee')
            <!------------------navbar----------------------------------->

         <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 shadow">
            <div class="container">
                <!--brand-->
                <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="{{ Route('homepage') }}">
                    <img src="img/logo.png" alt="Unijewelux" width="30px">
                    <span class="text-uppercase fw-lighter ms-2">UNIJEWELUX</span>
                </a>
            
                <!--cart,wishlist div-->

                <div class="order-lg-2">
                    <button data-bs-toggle="modal" data-bs-target="#okae" type="button" class="btn position-relative"><i class="fa fa-heart" style="color: #192841;"></i> Wishlist</button>

                    <div class="modal fade" id="okae">

                        <div class="modal-dialog">
                            <div class="modal-content shadow">
                                <img src="pics/wish.webp" height="200px">
                                <div class="modal-header">
                                    <h2>..Your Wishlist..</h2>
                                </div>
                                <div class="modal-body">    
                                    <h5>Wishlist is an empty.Save your favourite jewellery.</h5>
                                    <h5 class="text-center">Only your favourite jewelleries list, add to wishlist</h5>
                                </div>
                    

                            </div>
                        </div>
                    </div>


                    <button data-bs-toggle="modal" data-bs-target="#okai" type="button" class="btn position-relative"><i class="fa fa-shopping-cart" style="color: #192841;"></i> Cart</button>

                    <div class="modal fade" id="okai">

                        <div class="modal-dialog">
                            <div class="modal-content shadow">
                                <img src="pics/cart.jpg" height="200px">
                                <div class="modal-header">
                                    <h1>Empty cart..<i class="fa-solid fa-cart-shopping" style="color: #192841;"></i></h1>
                                </div>
                                <div class="modal-body">    
                                    <h5>Here is no jewellery<i class="fa-solid fa-ring" style="color: #192841;"></i>. Cart is an empty, please select your jewellery and fill your cart<i class="fa-solid fa-cart-shopping" style="color: #192841;"></i></h5>
                                </div>
                            </div>
                        </div>
                    </div> 

                 <span><i class="fa-solid fa-magnifying-glass" style="color: #192841; cursor: pointer;"></i></span>
                    
                </div>

                <!---navbar-->
                

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#showit">
                    <span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse order-lg-1" id="showit">
                        <ul class="navbar-nav mx-auto text-center">
                           <li class="nav-item px-2 py-2">
                            <a class="nav-link text-dark" href="{{ Route('homepage') }}">Home</a>
                           </li>
                           <li class="nav-item px-2 py-2">
                            <a class="nav-link text-dark" href="{{ Route('aboutpage') }}">About Us</a>
                           </li>
                           <li class="nav-item px-2 py-2">
                            <a class="nav-link text-dark" href="{{ Route('shoppage')}}">Shop</a>
                           </li>
                            <li class="nav-item px-2 py-2">
                            <a class="nav-link text-dark" href="{{ Route('register')}}">Register</a>
                           </li>

                            <li class="nav-item px-2 py-2">
                            <a class="nav-link text-dark" href="{{ Route('login')}}">Login</a>
                           </li>
                        
                            <li class="nav-item px-2 py-2">
                                <a class="nav-link text-dark" href="{{ Route('contactpage') }}">Contact Us</a>
                               </li>
                           
                           
                        </ul>

                    </div><!--navbar close-->
            </div>
        

        </nav>

        @yield('midcontent')
        @yield('dynamic')
        @yield('lastcontent')
            <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>    

</body>
</html>