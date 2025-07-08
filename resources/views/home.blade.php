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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magic/1.1.0/magic.min.css" />
        <!-- AOS CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">



    </head>

    <body>

    @extends('footer')
    @section('marquee')
        
<!----------------marquee---------------------->

<div id="Only" class="carousel slide" data-bs-ride="carousel" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-color: #192841;">
        <p class="text-light text-center my-auto p-2">Mega Sale Alert! Upto 50% Off on Select Jewellery – Shop Now!</p>
    </div>
    <div class="carousel-item" style="background-color: #192841;">
        <p class="text-light text-center my-auto p-2">Festive Dhamaka! Get Extra 10% Off on Gold Jewellery – Hurry!</p>
    </div>
    <div class="carousel-item" style="background-color: #192841;">
        <p class="text-light text-center my-auto p-2">Limited Time Offer! Flat 20% Off on Diamond Collections!</p>
    </div>
  </div>
</div>

@endsection

@extends('header')


@section('midcontent')
   
<!----------------------dropdown menus of jewellery with small screen offcanvas-------------------->

<nav class="navbar navbar-expand-lg navbar-dark justify-content-center  text-light" style="background-color: #192841;">
  <div class="container-fluid">
    
    
    <!-- Toggle button for small screen (Offcanvas) -->
    <div class="btn dropdown-toggle d-lg-none text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
    Wedding Jewellery
    </div>

        <div class="btn dropdown-toggle d-lg-none text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvaMenu">
    Daimond Jewellery
        </div>


        <div class="btn dropdown-toggle d-lg-none text-light" data-bs-toggle="offcanvas" data-bs-target="#canvas">
    Ring Jewellery
        </div>


          <div class="btn dropdown-toggle d-lg-none text-light" data-bs-toggle="offcanvas" data-bs-target="#Menu">
            Occasion Gifts
          </div>


          <div class=" btn dropdown-toggle d-lg-none text-light" data-bs-toggle="offcanvas" data-bs-target="#canva">
    All Jewellery
          </div>


          <div class="btn dropdown-toggle d-lg-none text-light" data-bs-toggle="offcanvas" data-bs-target="#Menus">
    Pearl Jewellery
          </div>



    <!-- Normal Dropdown for large screens -->
     <!-------all Jewellery first--------->
     
    <div class="collapse navbar-collapse d-none d-lg-block  text-light">
      <ul class="navbar-nav mx-auto  text-light">
        <li class="nav-item dropdown mega-dropdown my-auto text-center">
          <a class="nav-link dropdown-toggle" href="megadropdwon" data-bs-toggle="dropdown">
            Wedding Jewellery
          </a>
         <div class="dropdown-menu mega-menu" id="megadropdwon" style="border: 4px solid #192841;"><!--dropdown-menu Wedding Jewellery-->
                            <div class="container">
                            <div class="row"><!--- inner row-->
                                <div class="col-12 col-md-6"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h5><i>Wedding collection</i></h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bangle</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Anklet</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Toe ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Mangala sutra</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Chokar</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Anklet and toe rings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Nose piercing</a></li>
                                         <li><a href="#" style="text-decoration: none;" class="text-dark">Waistband</a></li>
                                    </ul>
                                </div><!-- inner col close-->
                                <div class="col-12 col-md-6"><!--inner col-->
                                    <img src="img/q.jpg" alt="wedding collection" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>

                                </div><!--inner col end-->
                            </div><!--inner row end-->
                            </div>

                        </div><!--dropdown-->
        </li>

     <!-------Daimond Jewellery second--------->


<li class="nav-item dropdown mega-dropdown mx-auto text-center dropdown-align-left">
          <a class="nav-link dropdown-toggle" href="dropdwon" data-bs-toggle="dropdown">
            Diamond Jewellery
          </a>
         <div class="dropdown-menu mega-menu" id="dropdwon" style="border: 4px solid #192841;"><!--dropdown-menu Wedding Jewellery-->
                            <div class="container">
                            <div class="row"><!--- inner row-->
                                <div class="col-md-4"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h5>Diamond shapes</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Round</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Princess</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">cushion</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Oval</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Emerlad</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Pear</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Asscher</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Heart</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Radiant</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Marquise</a></li>
                                            
                                    </ul>
                                </div><!-- inner col close-->

                                <div class="col-md-4"><!--inner col-->
                                     <ul class="list-unstyled">
                                        <li><h5>Diamond jewels types</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">pendant</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bangles</a></li>

                                            
                                    </ul>
                                </div><!--inner col end-->

                                <div class="col-md-4"><!--inner col-->
                                    <img src="img/y.jpg" alt="diamond" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>
                                </div><!--inner col end-->
                            </div><!--inner row end-->

 
                            </div>


            
        </div><!--dropdown-->
        </li>

     <!-------Ring Jewellery third--------->


        <li class="nav-item dropdown mega-dropdown my-auto text-center">
          <a class="nav-link dropdown-toggle" href="megadrop" data-bs-toggle="dropdown">
            Ring Jewellery
          </a>
         <div class="dropdown-menu mega-menu" id="megadrop" style="border: 4px solid #192841;"><!--dropdown-menu ring Jewellery-->
                            <div>
                             <div class="row"><!--- inner row-->
                                <div class="col-md-3"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h4><i>rings style</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Solitaire</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Halo</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Vintage</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Sidestone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Three stone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Design</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rose Gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Unique</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Gemstone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Two-stone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Men's engagement</a></li>
                                    </ul>
                                </div><!-- inner col close-->

                                <div class="col-md-3"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h4><i>women's ring</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Diamond</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Eternity</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Platinum</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rose gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">yellow gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">white gold</a></li>
                                        
                                    </ul>
                                </div><!-- inner col close-->


                                <div class="col-md-3"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h4><i>men's ring</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">tungsten</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">platinum</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">titatinum</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rose gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">yellow gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">white gold</a></li>
                                        
                                    </ul>
                                </div><!-- inner col close-->

                                <div class="col-md-3"><!--inner col-->
                                    <img src="img/a.jpg" alt="Rings" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>

                                </div><!--inner col end-->
                            </div><!--inner row end-->
                            </div>

                        </div><!--dropdown-->
        </li>


     <!-------Occasion gifts Jewellery--------->


      <li class="nav-item dropdown mega-dropdown my-auto text-center dropdown-align-right">
          <a class="nav-link dropdown-toggle" href="megadrop" data-bs-toggle="dropdown">
            Occasion Gifts
          </a>
         <div class="dropdown-menu mega-menu" id="megadrop" style="border: 4px solid #192841;"><!--dropdown-menu Occasion Gifts-->
                            <div>
                             <div class="row"><!--- inner row-->
                                <div class="col-md-4"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h4><i>Gifts</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bracelets</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Diamond jewellery</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Gemstone jewellery</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Peral jewellery</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Gift for her</a></li>
                                            
                                     </ul>
                                </div><!-- inner col close-->
                                <div class="col-md-4"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h4><i>Gift by occasion</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Anniversary</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Graduaation</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Wedding party gifts</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bridal jewellery</a></li>
                                        
                                     </ul>
                                </div><!--inner col end-->
                                <div class="col-md-4"><!--inner col-->
                                    <img src="img/w.jpg" alt="gifts" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>
                      
                                </div><!--inner col end-->
                            </div><!--inner row end-->
                            </div>

                        </div><!--dropdown-->
        </li>

     <!-------All Jewellery fifth--------->


      <li class="nav-item dropdown mega-dropdown my-auto text-center dropdown-align-right">
          <a class="nav-link dropdown-toggle" href="megadrop" data-bs-toggle="dropdown">
           All Jewellery
          </a>
         <div class="dropdown-menu mega-menu" id="megadrop" style="border: 4px solid #192841;"><!--dropdown-menu All Jewellery-->
                            <div class="row"><!--- inner row-->
                                <div class="col-md-3"><!--inner col-->
                                            <ul class="list-unstyled">
                                                <li><h5>Jewellery</h5></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Bracelets</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Chain</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Peral</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Choker</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Pendant</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Jhumka</a></li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Nose piercing</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Diamond</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Bangle</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Toe ring</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Brooch</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Locket</a></li>
                                            </ul>
                                        </div>

                               <div class="col-md-3"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h5>men's jewellery</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bangle</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">pendant</a></li>
                                               
                                    </ul>
                                </div><!-- inner col close-->

                                <div class="col-md-3"><!--inner col-->
                                    <ul class="list-unstyled">
                                        <li><h5>Couple jewellery</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Pendant</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bracelet</a></li>
                                        
                                    </ul>

                                </div><!-- inner col close-->

                            
                                <div class="col-md-3"><!--inner col-->
                                    <img src="img/s.jpg" alt="Jewellery" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>
                                 </div>   


                            </div><!--inner row end--->

                        </div><!--dropdown-->
                    </li>


     <!-------Pearl Jewellery sixth--------->


      <li class="nav-item dropdown mega-dropdown my-auto text-center dropdown-align-right">
          <a class="nav-link dropdown-toggle" href="megadrop" data-bs-toggle="dropdown">
           Pearl Jewellery
          </a>
         <div class="dropdown-menu mega-menu" id="megadrop" style="border: 4px solid #192841;"><!--dropdown-menu Pearl Jewellery-->
                        <div class="row"><!--- inner row-->
                            <div class="col-md-6"><!--inner col-->
                                <ul class="list-unstyled ms-4">
                                    <li><h5>Pearls Jewellery</h5></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>                                 
                                    <li><a href="#" style="text-decoration: none;" class="text-dark"> Sets & Necklaces</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Bangles & Bracelets</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Combo</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Choker</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">pendant set</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Choker</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Pendant</a></li>
                                    
                                </ul>
                            </div><!-- inner col close-->
                            <div class="col-md-6"><!--inner col-->
                                <img src="img/p.jpg" alt="pearl" class="img-fluid">
                                <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>

                            </div><!--inner col end-->
                        </div><!--inner row end--->

                        </div><!--dropdown-->
        </li>



      </ul>
    </div>
  </div>
</nav>



<!-- Offcanvas Menu for Small Screens -->
 <!------wedding colllection-------->

<div class="offcanvas offcanvas-start d-lg-none" id="offcanvasMenu" tabindex="-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Wedding Collection</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
                            <div class="container">
                            <div class="row"><!--- inner row-->
                                    <ul class="list-unstyled p-2" style="background-color: #EBE8DB; border-radius: 10px;">
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bangle</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Anklet</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Toe ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Mangala sutra</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Chokar</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Anklet and toe rings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Nose piercing</a></li>
                                         <li><a href="#" style="text-decoration: none;" class="text-dark">Waistband</a></li>
                                    </ul>
                                    <img src="img/q.jpg" alt="wedding collection" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>

                            </div><!--inner row end-->
                            </div>
  </div>
</div>






<!-- Offcanvas Menu for Small Screens -->
 <!----------diamond jewellery------------>
<div class="offcanvas offcanvas-start d-lg-none" id="offcanvaMenu" tabindex="-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Diamond Jewellery</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
                            <div class="container">
                            <div class="row"><!--- inner row-->
                                    <ul class="list-unstyled p-2" style="background-color: #FFE8CD; border-radius: 10px;">
                                        <li><h5>Diamond shapes</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Round</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Princess</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">cushion</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Oval</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Emerlad</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Pear</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Asscher</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Heart</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Radiant</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Marquise</a></li>
                                            
                                    </ul>

                                     <ul class="list-unstyled p-2" style="background-color: #C0C9EE; border-radius: 10px;">
                                        <li><h5>Diamond jewels types</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">pendant</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bangles</a></li>  
                                    </ul>

                                    <img src="img/y.jpg" alt="diamond" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>
                            </div><!--inner row end-->

 
                            </div>
                        </div>
                    </div>






<!-- Offcanvas Menu for Small Screens -->
 <!---------ring jewellery----------->
<div class="offcanvas offcanvas-start d-lg-none" id="canvas" tabindex="-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Ring Jewellery</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
                             <div>
                             <div class="row"><!--- inner row-->
                                    <ul class="list-unstyled p-2" style="background-color: #C7D9DD; border-radius: 10px;">
                                        <li><h4><i>rings style</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Solitaire</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Halo</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Vintage</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Sidestone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Three stone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Design</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rose Gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Unique</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Gemstone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Two-stone</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Men's engagement</a></li>
                                    </ul>

                                    <ul class="list-unstyled p-2" style="background-color: #FFB4A2; border-radius: 10px;">
                                        <li><h4><i>women's ring</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Diamond</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Eternity</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Platinum</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rose gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">yellow gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">white gold</a></li>
                                        
                                    </ul>


                                    <ul class="list-unstyled p-2" style="background-color: #A59D84; border-radius: 10px;">
                                        <li><h4><i>men's ring</i></h4></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">tungsten</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">platinum</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">titatinum</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rose gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">yellow gold</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">white gold</a></li>
                                        
                                    </ul>

                                    <img src="img/a.jpg" alt="Rings" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>

                            </div><!--inner row end-->
                            </div>
  </div>
</div>





<!-- Offcanvas Menu for Small Screens -->
 <!---------occasion gifts----------->
<div class="offcanvas offcanvas-start d-lg-none" id="Menu" tabindex="-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Occasion Jewelllery</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
                            <div>
                             <div class="row"><!--- inner row-->
                                    <ul class="list-unstyled p-2" style="background-color: #CCD3CA; border-radius: 10px;">
                                        <li><h5>Gifts</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bracelets</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Diamond jewellery</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Gemstone jewellery</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Peral jewellery</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Gift for her</a></li>
                                            
                                     </ul>

                                    <ul class="list-unstyled p-2" style="background-color: #EAD8C0; border-radius: 10px;">
                                        <li><h5>Gift by occasion</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Anniversary</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Graduaation</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Wedding party gifts</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bridal jewellery</a></li>
                                        
                                     </ul>
                                </div><!--inner col end-->
                                    <img src="img/w.jpg" alt="gifts" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>
                      
                            </div><!--inner row end-->
                            </div>
  </div>
</div>





<!-- Offcanvas Menu for Small Screens -->
 <!---------All Jewellery----------->
<div class="offcanvas offcanvas-start d-lg-none" id="canva" tabindex="-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">All Jewelllery</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
                            <div class="row"><!--- inner row-->
                                            <ul class="list-unstyled p-2" style="background-color: #E3E1D9; border-radius: 10px;">
                                                <li><h5>Jewellery</h5></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Necklace</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Bracelets</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Chain</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Peral</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Choker</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Pendant</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Jhumka</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Nose piercing</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Diamond</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Bangle</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Toe ring</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Brooch</a></li>
                                                <li><a href="#" style="text-decoration: none;" class="text-dark">Locket</a></li>
                                            </ul>

                                    <ul class="list-unstyled p-2" style="background-color: #EBF3E8; border-radius: 10px;">
                                        <li><h5>men's jewellery</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Rings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bangle</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">pendant</a></li>
                                               
                                    </ul>

                                    <ul class="list-unstyled"  style="background-color: #F6DFEB; border-radius: 10px;">
                                        <li><h5>Couple jewellery</h5></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Ring</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Pendant</a></li>
                                        <li><a href="#" style="text-decoration: none;" class="text-dark">Bracelet</a></li>
                                        
                                    </ul>


                            
                                    <img src="img/s.jpg" alt="Jewellery" class="img-fluid">
                                    <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>


                            </div><!--inner row end--->

  </div>
</div>





<!-- Offcanvas Menu for Small Screens -->
 <!---------Pearls jewellery----------->
<div class="offcanvas offcanvas-start d-lg-none" id="Menus" tabindex="-1">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Pearl Jewelllery</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
                       <div class="row"><!--- inner row-->
                                <ul class="list-unstyled p-2" style="background-color: #D3CEDF; border-radius: 10px;">
                                    <li><h5>Pearls Jewellery</h5></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Earings</a></li>                                 
                                    <li><a href="#" style="text-decoration: none;" class="text-dark"> Sets & Necklaces</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Bangles & Bracelets</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Combo</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Choker</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">pendant set</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Choker</a></li>
                                    <li><a href="#" style="text-decoration: none;" class="text-dark">Pendant</a></li>
                                    
                                </ul>
                                <img src="img/p.jpg" alt="pearl" class="img-fluid">
                                <p><a href="#" style="text-decoration: none;" class="text-danger">View all collection</a></p>

                        </div><!--inner row end--->


  </div><!------main container--------->
</div><!-------dropdown menu navbar end--------->

            

            <!---------------------------------carousel-------------------------------------------->





            <div class="carousel slide magictime vanishIn" data-bs-ride="carousel" id="show" style="background:#BC8F8F;">            
            <div class="carousel-inner">
                
                    <!-------------------------------------------------------------------------1----------------------------------------------->

                    <div class="carousel-item active" style="height: 80vh;">
                        <img src="img/cart2.jpg" class="img-fluid w-100" style="height: 100%;">
                    </div>
            
                            <!-----------------------------------------------------------------------------------2----------------------------------------------------------->
                    <div class="carousel-item" style="height: 80vh;">
                        <img src="img/ok.jpg" class="img-fluid w-100" style="height: 100%;">
                    </div>            
            
 
                    <!------------------------------------------------------------------------------3---------------------------------------------------------------->
            
                   <div class="carousel-item" style="height: 80vh;">
                        <img src="img/yes.jpg" class="img-fluid w-100" style="height: 100%;">
                    </div>    


            </div><!---carousel-inner-->
        </div><!-------carousel------>
 


        <!---------Mens jewellery---------->
        
        <div class="container p-1 mt-5">
            <div class="row">
                <div class="d-flex flex-direction-row"><h2 class="mb-4 mt-3">Male Collection</h2><a href="" class="text-danger mb-4 mt-3 ms-auto">See all</a></div>

                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                    <div class=" main-card">
                        <img src="pics/men1.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4 class="mt-2">Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3 text-primary"><a href="#" class="text-decoration-none">₹999</a></s>₹399</h6>
                        <a href="#" style="text-decoration: none;">Steel Black Silver Locket Pendant Necklace Chain</a></h5>

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/men2.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4 class="mt-2">Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹999</s>₹279</h6>
                            <a href="{{ route('pro3')}}" style="text-decoration: none;">Stylish Boys Bracelet Stainless Steel</a>
                            

                        </div>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                    <div class=" main-card">
                        <img src="pics/men3.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4 class="mt-2">The youbeela store</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹999</s>₹208</h6>
                            <a href="#" class="text-decoration-none">men Stainless Steel Ring Combo for Boys</a>
                            

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/men4.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4>The nakabh store</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,999</s>₹199</h6>
                            <a href="#" class="text-decoration-none">Stainless Steel Rice Chain for Men and Boys</a>
                            
                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/men5.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4>Three keys jewelry</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,574</s>₹459</h6>
                            <a href="#" class="text-decoration-none">Santos Rosewood Wood Inlay tianium for boys</a>
                            

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/men6.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4>The Giva store</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,947</s>₹475</h6>
                            <a href="#" class="text-decoration-none">Sterling Silver Jazzy Link Bracelet For Him</a>
                            

                        </div>
                    </div>

                </div>
 


            </div>
        </div>





       <!-------mens brand-------->
        
        <div class=" container carousel slide mt-4 p-2" data-bs-ride="carousel" id="copied">

            
    
            <div class="carousel-inner" data-bs-target="#copied">
            
                <!-------------------------------------------------------------------------1----------------------------------------------->
    
                <div class="carousel-item">
    
                    <div class="container">
                        <div class="row">
                                <div class="col-md-2 col-sm-4 my-auto  mx-auto card" style="border:none;"  data-aos="zoom-in"  data-aos-delay="30" data-aos-duration="1000">
                                   
                                        <img src="pics/m brand2.jpg" class="card-img w-75">
                                </div>
    
    
                                <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="60" data-aos-duration="1000">
                                    
                                        <img src="pics/m brand5.jpg" class="card-img w-75">	
    
                                </div>
    
    
                                <div class="col-md-2 col-sm-4 my-automx-auto  card" style="border:none;" data-aos="zoom-in"  data-aos-delay="80" data-aos-duration="1000">
                                    
                                    <img src="pics/m brand3.png" class="card-img w-75">	
                                    
                                </div>

                                <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">
                                    
                                    <img src="pics/m brand0.jpg" class="card-img w-75">	
                                    
                                </div>

                                <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="130" data-aos-duration="1000">
                                    
                                    <img src="pics/m brand6.png" class="card-img w-75">	
                                    
                                </div>

                                <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                    
                                    <img src="pics/m brand9.jpg" class="card-img w-75">	
                                    
                                </div>




                               



    
                         </div><!------row------>
                    </div><!--------container----->

                </div><!-------carousel-item------>
        
    
                <!-----------------------------------------------------------------------------------2----------------------------------------------------------->
    
    
                <div class="carousel-item active">
    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2  col-sm-4 my-auto mx-auto card" style="border: none;" data-aos="zoom-in"  data-aos-delay="30" data-aos-duration="1000">
                                    <img src="pics/m brand1.jpg" class="card-img w-50">	
                            </div>


                            <div class="col-md-2  col-sm-4 my-auto mx-auto" data-aos="zoom-in"  data-aos-delay="60" data-aos-duration="1000">
                                    <img src="pics/m brands1.png" class="card-img w-75">	
                            </div>



                            <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="80" data-aos-duration="1000">
                                    <img src="pics/m brand7.png" class="card-img w-75">	
                            </div>

                            <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">
                                    <img src="pics/m brand8.png" class="card-img w-75">	
                            </div>

                            <div class="col-md-2 col-sm-4 my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="130" data-aos-duration="1000">
                                <img src="pics/m brand4.jpg" class="card-img w-75">	
                        </div>

                        <div class="col-md-2 col-sm-4  my-auto mx-auto card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                            <img src="pics/m barnds2.png" class="card-img w-75">	
                    </div>


                    

                        </div><!------row------>
                    </div><!--------container----->
    
                </div><!-------carousel-item------>
    
    
            </div><!----carousel-inner---->
    
        </div><!------carousel  slide--------->
        










        <!---------Female Collection------------>

        <div class="container p-2">
            <div class="row">
                <div class="d-flex flex-direction-row"><h2 class=" mb-4 mt-3">Female Collection</h2><a href="" class="text-danger mb-4 mt-3 ms-auto">See all</a></div>

                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/new2.jpg" class="card-img">
                        <div class="card-title text-center mycardtitle">
                            <h4 class="mt-2">The ZENEME store</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹5,499</s>₹948</h6>
                            <a href="#" class="text-decoration-none">Jewellery Set for Girls and Women</a>

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/new4.jpg" class="card-img ">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4 class="mt-2">The MEENAZ store</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,000</s>₹149</h6>
                            <a href="{{ route('pro5') }}" class="text-decoration-none">Diamond Pendants chain with pendant</a>
                            

                        </div>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4 col-lg-2 mt-3" data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/new1.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4 class="mt-2">Yellow chimes</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,299</s>₹299</h6>
                            <a href="#" class="text-decoration-none">Heart Shaped Silver Toned Bracelet</a>
                            

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 pt-3" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/new6.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4>Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,299</s>₹299</h6>
                            <a href="#" class="text-decoration-none">Heart Infinity Pendant For Women Girls</a>
                            

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 pt-3" data-aos="fade-down" data-aos-delay="250" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/new3.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4>Vientiq</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹899</s>₹199</h6>
                            <a href="#" class="text-decoration-none">Blue Bottle Pendant Necklace for Women</a>
                            

                        </div>
                    </div>

                </div>


                <div class="col-md-4 col-sm-4 col-lg-2 pt-3" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000">
                    <div class="main-card">
                        <img src="pics/new7.jpg" class="card-img">
                        
                        <div class="card-title text-center mycardtitle">
                            <h4>The Vivanilla store</h4>
                            <h6>M.R.P:<s class="me-3 text-primary">₹1,209</s>₹598</h6>
                            <a href="#" class="text-decoration-none">Flower Necklace for Women and Girls</a>
                            

                        </div>
                    </div>

                </div>
 


            </div>
        </div>





       <!-------women brand-------->
        
        <div class=" container carousel slide mt-5" data-bs-ride="carousel" id="copied">

           
    
    
            <div class="carousel-inner" data-bs-target="#copied">
            
                <!-------------------------------------------------------------------------1----------------------------------------------->
    
                <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                   
                                        <img src="pics/accessher.png" class="card-img w-75 h-75">
                                </div>
    
    
                                <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                    
                                        <img src="pics/amama.png" class="card-img w-75 h-75">	
    
                                </div>
    
    
                                <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                    
                                    <img src="pics/tanisq.png" class="card-img w-75 h-75">	
                                    
                                </div>

                                <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                    
                                    <img src="pics/yellow chimes.webp" class="card-img w-75 h-75">	
                                    
                                </div>

                                <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;"data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                    
                                    <img src="pics/meesho.png" class="card-img w-75 h-75">	
                                    
                                </div>

                                <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;" data-aos="zoom-in"  data-aos-delay="160" data-aos-duration="1000">
                                    
                                    <img src="pics/inter.jpg" class="card-img w-75 h-75">	
                                    
                                </div>




                               



    
                         </div><!------row------>
                </div><!-------carousel-item------>
        
    
                <!-----------------------------------------------------------------------------------2----------------------------------------------------------->
    
    
                <div class="carousel-item">
                            <div class="row">
                            <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;">
                                    <img src="pics/carat.jpg" class="card-img w-75 h-75">	
                            </div>


                            <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;">
                                    <img src="pics/shining diva.jpg" class="card-img w-75 h-75">	
                            </div>



                            <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;">
                                    <img src="pics/shreya.jpg" class="card-img w-75 h-75">	
                            </div>

                            <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;">
                                    <img src="pics/shop.png" class="card-img w-75 h-75">	
                            </div>

                            <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;">
                                <img src="pics/starz.jpg" class="card-img w-75 h-75">	
                        </div>

                        <div class="col-md-2 col-sm-4 my-auto h-100 card" style="border:none;">
                            <img src="pics/youbella.webp" class="card-img w-75 h-75">	
                    </div>


                    

                        </div><!------row------>    
                </div><!-------carousel-item------>
    
    
            </div><!----carousel-inner---->
    
        </div><!------carousel  slide--------->
        



<!----------categories------------>



            <div class="container mt-5">

                <div class="row mt-1">
                    <div class="d-flex flex-direction-row"><h3 class="mb-4">Browse our catogories</h3><a href="" class="text-danger ms-auto">See more</a></div>

                    <div class="col-md-2 col-sm-4"  data-aos="zoom-in-up"  data-aos-delay="50" data-aos-duration="1000">
                            <img src="pics/pearl.webp" class="rounded w-100 img-fluid">                        
                            <h3 class="text-center">Necklaces</h3>
                    </div>



                    <div class="col-md-2 col-sm-4"  data-aos="zoom-in-up"  data-aos-delay="100" data-aos-duration="1000">
                            <img src="img/y.jpg" class="rounded w-100 img-fluid">                       
                            <h3 class="text-center">pendants</h3>
                    </div>



                    <div class="col-md-2 col-sm-4"  data-aos="zoom-in-up"  data-aos-delay="150" data-aos-duration="1000">
                            <img src="img/d.jpg" class="rounded w-100 img-fluid">                           
                            <h3 class="text-center">Rings</h3>

                    </div>



                    <div class="col-md-2 col-sm-4"  data-aos="zoom-in-up"  data-aos-delay="200" data-aos-duration="1000">
                            <img src="pics/bracelet.webp" class="rounded w-100 img-fluid">                       
                            <h3 class="text-center">Bracelets</h3>
                </div>

                <div class="col-md-2 col-sm-4"  data-aos="zoom-in-up"  data-aos-delay="250" data-aos-duration="1000">
                        <img src="img/cart9.jpg" class="rounded w-100 img-fluid">                   
                        <h3 class="text-center">Earings</h3>
                </div>


                <div class="col-md-2 col-sm-4"  data-aos="zoom-in-up"  data-aos-delay="300" data-aos-duration="1000">
                        <img src="img/bangle.jpg" class="rounded w-100 img-fluid">                   
                        <h3 class="text-center">Bangles</h3>
                </div>




            </div>



        </div>
 
        <!-------------card end-->


@endsection

@section('dynamic')


       <!------products-------->

 
        <div class="container-fluid mt-5">
            <div class="row mx-auto">
                <div class="col-lg-12">
                    <div>
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#featured" data-bs-toggle="tab">Feautred Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="#viewed" data-bs-toggle="tab">Most Viewed</a></li>
                            <li class="nav-item"><a class="nav-link" href="#new" data-bs-toggle="tab">New Releases</a></li>
                        </ul>

                        <div class="tab-content mx-auto">

                            <div id="featured" class="active tab-pane fade in show">
                                <div class="row mx-auto justify-content-center">

                                    <div class="col-md-6 col-lg-4 col-xl-3 col-sm-6 mt-2" data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">                
                                            <span class="percent">Sale%</span> 
                                            <div class="card-image">               
                                                <img src="pics/pro1.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro2.jpg"> 
                                            </div><!---card img close----->

                                            <div class="card-title p-1">
                                                <h4>Shining Diva</h4>
                                                <h6>M.R.P:<s class="me-3">₹1,947</s>₹475</h6>
                                                <p><a href="{{ route('pro1') }}" class="text-decoration-none">Crystal Butterfly Earrings Chain Pendant Necklace Combo Jewellery Set for Women</a></p>
                                            </div><!-----card title close------>


                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                <div class="d-flex flex-row">
                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                </div><!--d-flex close--->
                                            </div><!------out div close------->
                                        </div><!--card-->                   
                                    </div><!--col-->


                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">
                
                                            <span class="percent">Sale%</span> 
                                            <div class="card-image">
                
                                                <img src="pics/pro3.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro4.jpg"> 
                                            </div><!----card img--->

                                            <div class="card-title p-1">
                                                <h4>Shining Diva Fashion</h4>
                                                <h6>M.R.P:<s class="me-3">₹3,999</s>₹349</h6>
                                                <p><a href="{{ route('pro4') }}" class="text-decoration-none">Shining Diva Fashion Royal Blue Crystal CZ Silver Plated Stylish Bracelet Gift for Girls</a></p>
                                            </div>


                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                <div class="d-flex flex-row">

                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>                        
                                                </div>
                                            </div><!-----out container----->
                                        </div><!--card-->                   
                                    </div><!--col-->

                
                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">                        
                                            <div class="card-image">
                
                                                <img src="pics/pro5.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro6.jpg"> 
                                            </div>  
                                            <div class="card-title p-1">
                                                <h5>The Lucky Jewellery Store</h5>
                                                <h6>M.R.P:<s class="me-3">₹17,251</s>₹1,709</h6>
                                                <p><a href="" class="text-decoration-none">Gold Plated Dulhan Choker Bridal Set with sheeshpatti for Girls & Women</a></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                <div class="d-flex flex-row">
                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                </div>
                                            </div>
                                        </div><!--card-->                   
                                    </div><!--col-->


                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">
                
                                            <span class="percent">Sale%</span> 
                                            <div class="card-image">               
                                                <img src="pics/pro13.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro31.jpg"> 
                                            </div>  

                                             <div class="card-title p-1">
                                                <h4> The Fashion Frill</h4>
                                                <h6>M.R.P:<s class="me-3">₹999</s>₹202</h6>
                                                <p><a href="" class="text-decoration-none">Butterfly Ear Cuff Crawler AD & Pearl Gold Plated Pearl Chain Drop Stud Earrings For Girls Women</a></p>   
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center p-2">
                                                <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                <div class="d-flex flex-row">
                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>                        
                                                </div>
                                            </div>
                                        </div><!--card-->                   
                                    </div><!--col-->


                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="200" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">
                
                         
                                            <div class="card-image">
                
                                                <img src="pics/3pro.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/4pro.jpg"> 
                                            </div>  
                                            <div class="card-title p-1">
                                                <h4>Shining Diva Fashion</h4>
                                                <h6>M.R.P:<s class="me-3">₹1,995</s>₹314</h6>
                                                 <p><a href="" class="text-decoration-none">Angel Wings Platinum Plated Crystal Pendant Necklace Jewellery Set Gifts for Women & girls</a></p>
                                             </div>


                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                    <div class="d-flex flex-row">

                                                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                        <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                                                    </div>
                                                </div>
                                            </div><!--card-->                   
                                        </div><!--col-->


                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="200" data-aos-duration="1000">
                                            <div class="card pro-card mycardtitle">                         
                                                <div class="card-image">                
                                                    <img src="pics/pro23.jpg" class="card-img">                           
                                                    <img class="hover-img" src="pics/pro32.jpg"> 
                                                </div>  

                                                <div class="card-title p-1">
                                                    <h5> The university Trendz store</h5>
                                                    <h6>M.R.P:<s class="me-3">₹999</s>₹212</h6>
                                                    <p><a href="" class="text-decoration-none">University Trendz 18k Rhodium Plated Antique Blue charm Bracelet for Girls</a></p>   
                                                </div>


                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                    <div class="d-flex flex-row">
                                                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                        <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                                                   </div>
                                                </div>
                                            </div><!--card-->                   
                                        </div><!--col-->


                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="200" data-aos-duration="1000">
                                            <div class="card pro-card mycardtitle">
                
                                                <span class="percent">Sale%</span> 
                                                <div class="card-image">
                
                                                    <img src="pics/prod.jpg" class="card-img">                           
                                                    <img class="hover-img" src="pics/prod1.jpg"> 

                                                </div>  

                                                <div class="card-title p-1">
                                                    <h4>Shining Diva Fashion</h4>
                                                    <h6>M.R.P:<s class="me-3">₹2,449</s>₹349</h6>
                                                    <p><a href="" class="text-decoration-none">Shining Diva Fashion Crystal Pearl Necklace Set For Women/Jewellery Set with Earrings for Women & Girls</a></p>    
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                    <div class="d-flex flex-row">

                                                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                        <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                    </div>
                                                </div>
                                            </div><!--card-->                   
                                        </div><!--col-->



                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="200" data-aos-duration="1000">
                                            <div class="card pro-card mycardtitle">  
                                                <div class="card-image">             
                                                    <img src="pics/pro0.jpg" class="card-img">                           
                                                    <img class="hover-img" src="pics/pro00.jpg"> 

                                                </div>  
                                                <div class="card-title p-1">
                                                    <h4>The Lucky Bella Store</h4>
                                                    <h6>M.R.P:<s class="me-3">₹2,999</s>₹295</h6>
                                                    <p><a href="" class="text-decoration-none">YouBella Jewellery for women Traditional Gold Plated Bangles for Women and Girls</a></p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>
                                                    <div class="d-flex flex-row">
                                                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                        <span class="cart"><i class="fa fa-shopping-cart"></i></span>                    
                                                    </div>
                                                </div>
                                            </div><!--card-->                   
                                        </div><!--col-->


                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="300" data-aos-duration="1000">
                                            <div class="card pro-card mycardtitle">                         
                                                <div class="card-image">
                
                                                    <img src="pics/pro11.jpg" class="card-img">                           
                                                    <img class="hover-img" src="pics/11pro.jpg">    
                                                </div>  

                                                <div class="card-title p-1">
                                                    <h4>The Shreyadzines Store</h4>
                                                    <h6>M.R.P:<s class="me-3">₹1,299</s>₹474</h6>
                                                    <p><a href="" class="text-decoration-none">Shreyadzines Non-Precious Metal Ghungroo Anklet for Women & Girl's</a></p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center p-2">
                                                    <button class="btn text-uppercase btn-sm details text-light"  style="background-color: #566b90;">Details</button>
                                                    <div class="d-flex flex-row">
                                                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                        <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                                                    </div>
                                                </div>
                                            </div><!--card-->                   
                                        </div><!--col-->


                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="300" data-aos-duration="1000">
                                            <div class="card pro-card mycardtitle">
                
                                                <span class="percent">Sale%</span> 
                                                <div class="card-image">
                
                                                    <img src="pics/pro12.jpg" class="card-img">                           
                                                    <img class="hover-img" src="pics/pro21.jpg"> 

                                                </div>  

                                                <div class="card-title p-1">
                                                    <h4>Shining Diva Fashion</h4>
                                                    <h6>M.R.P:<s class="me-3">₹1,999</s>₹299</h6>
                                                    <p><a href="" class="text-decoration-none">Shining Diva Fashion 18k Rose Gold Stylish Bracelet for Women and Girls</a></p>
                                                 </div>


                                                <div class="d-flex justify-content-between align-items-center p-2">


                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                    <div class="d-flex flex-row">

                                                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                        <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                    </div>


                    

                                                </div>
                

                                            </div><!--card-->                   

                                        </div><!--col-->



                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="300" data-aos-duration="1000">
                                            <div class="card pro-card mycardtitle">
                
                        
                                                 <div class="card-image">
                
                                                    <img src="pics/pro14.jpg" class="card-img">                           
                                                    <img class="hover-img" src="pics/pro41.jpg"> 

                                                </div>  

                                                <div class="card-title p-1">
                                                    <h4>Yellow Chimes Store</h4>
                                                    <h6>M.R.P:<s class="me-3">₹1,071</s>₹319</h6>
                                                    <p><a href="" class="text-decoration-none">Yellow Chimes Silver Tone White Pearl Stone Multi-Layer Bracelet for Women</a></p>
                                                </div>


                                                <div class="d-flex justify-content-between align-items-center p-2">


                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                        <div class="d-flex flex-row">

                                                            <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                            <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                        </div>
                                                    </div>
            
                                                </div><!--card-->                   

                                            </div><!--col-->


                                            <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="300" data-aos-duration="1000">
                                                <div class="card pro-card mycardtitle">
                
                                                    <span class="percent">Sale%</span> 
                                                    <div class="card-image">
                
                                                        <img src="pics/pro12.jpg" class="card-img">                           
                                                        <img class="hover-img" src="pics/pro21.jpg"> 

                                                </div>  

                                                <div class="card-title p-1">
                                                    <h4>Shining Diva Fashion</h4>
                                                    <h6>M.R.P:<s class="me-3">₹1,999</s>₹299</h6>
                                                    <p><a href="" class="text-decoration-none">Shining Diva Fashion 18k Rose Gold Stylish Bracelet for Women and Girls</a></p>
                                                </div>


                                                 <div class="d-flex justify-content-between align-items-center p-2">


                                                    <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                    <div class="d-flex flex-row">

                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                </div>
                                            </div>
                

                                        </div><!--card-->                   

                                    </div><!--col-->


                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">
                
                       
                                            <div class="card-image">
                
                                                <img src="pics/pro15.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro51.jpg"> 

                                            </div>  

                                            <div class="card-title p-1">
                                                <h4>The Clara Store</h4>
                                                <h6>M.R.P:<s class="me-3">₹3,998</s>₹1,894</h6>
                                                <p><a href="" class="text-decoration-none">Clara 925 Sterling Silver Oval stone Ring with Adjustable Band | Gift for Women Wife Girls</a></p>
                                            </div>


                                            <div class="d-flex justify-content-between align-items-center p-2">


                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                            <div class="d-flex flex-row">

                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                            </div>


                    

                                        </div>
                

                                    </div><!--card-->                   

                                </div><!--col-->



                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                    <div class="card pro-card mycardtitle">
                
                                        <span class="percent">Sale%</span> 
                                        <div class="card-image">
                
                                            <img src="pics/pro@.jpg" class="card-img">                           
                                            <img class="hover-img" src="pics/@pro.jpg"> 

                                        </div>  

                                        <div class="card-title p-1">
                                            <h4> the Fashion Frill</h4>
                                            <h6>M.R.P:<s class="me-3">₹999</s>₹249</h6>
                                            <p><a href="" class="text-decoration-none">Geometric Stainless Steel Black Silver Locket Pendant Necklace Chain For Men</a></p>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center p-2">
                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                            <div class="d-flex flex-row">

                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                            </div>


                    

                                        </div>
                

                                    </div><!--card-->                   

                                </div><!--col-->


                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                    <div class="card pro-card mycardtitle">
                
                         
                                        <div class="card-image">
                
                                            <img src="pics/pro17.jpg" class="card-img">                           
                                            <img class="hover-img" src="pics/pro71.jpg"> 

                                        </div>  

                                        <div class="card-title p-1">
                                            <h4>The Memoir Store</h4>
                                            <h6>M.R.P:<s class="me-3">₹1,499</s>₹699</h6>
                                            <p><a href="" class="text-decoration-none">Memoir Gold plated Single Imitation Diamond Solitaire Engagement, Wedding Party Finger ring Men</a></p>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center p-2">
                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                            <div class="d-flex flex-row">

                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                            </div>


                    

                                        </div>
                

                                    </div><!--card-->                   

                                </div><!--col-->


                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                    <div class="card pro-card mycardtitle">
                
                         
                                        <div class="card-image">
                
                                            <img src="pics/pro18.jpg" class="card-img">                           
                                            <img class="hover-img" src="pics/pro81.jpg"> 

                                        </div>  

                                        <div class="card-title p-1">
                                            <h4>The ZAVYA  Store</h4>
                                            <h6>M.R.P:<s class="me-3">₹2,238</s>₹1,975</h6>
                                            <p><a href="" class="text-decoration-none">ZAVYA 925 Sterling Silver Studded and Cubic Zirconia CZ Solitaire Rhodium Plated Lovers Couple Rings</a></p>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center p-2">


                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                <div class="d-flex flex-row">

                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                </div>
                                            </div>
                

                                         </div><!--card-->                   

                                    </div><!--col-->



                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">
                
                                            <span class="percent">Sale%</span> 
                                            <div class="card-image">
                
                                                <img src="pics/pro@.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/@pro.jpg"> 

                                            </div>  

                                            <div class="card-title p-1">
                                                <h4> the Fashion Frill</h4>
                                                <h6>M.R.P:<s class="me-3">₹999</s>₹249</h6>
                                                <p><a href="" class="text-decoration-none">Geometric Stainless Steel Black Silver Locket Pendant Necklace Chain For Men</a></p>
                                            </div>


                                            <div class="d-flex justify-content-between align-items-center p-2">
                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                <div class="d-flex flex-row">

                                                    <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                    <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                </div>
                                            </div>
                

                                        </div><!--card-->                   

                                    </div><!--col-->



                                    <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="500" data-aos-duration="1000">
                                        <div class="card pro-card mycardtitle">
                
                        
                                        <div class="card-image">
                
                                            <img src="pics/pro09.jpg" class="card-img">                           
                                            <img class="hover-img" src="pics/men2.jpg"> 

                                        </div>  

                                        <div class="card-title p-1">
                                            <h4>The Fashion Frill</h4>
                                            <h6>M.R.P:<s class="me-3">₹999</s>₹279</h6>
                                            <p><a href="{{ route('pro3')}}" class="text-decoration-none">Charm Tiger Eye's Stone Adjustable Chain Bracelet For Men Boys Accessories For Men</a></p>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center p-2">


                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                            <div class="d-flex flex-row">

                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                             </div>
                                        </div>
                

                                    </div><!--card-->                   

                                </div><!--col-->


                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                    <div class="card pro-card mycardtitle">
                
                         
                                        <div class="card-image">
                
                                            <img src="pdimg/brac1.jpg" class="card-img">                           
                                            <img class="hover-img" src="pdimg/brac4.jpg"> 

                                        </div>  

                                        <div class="card-title p-1">
                                            <h4>Okos</h4>
                                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹89</h6>
                                            <p><a href="{{ route('pro2')}}" class="text-decoration-none">Pink Flowers Link Chain Adjustable Size Charm Alloy Bracelet Decorated With Crystals for Girls</a></p>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center p-2">


                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                            <div class="d-flex flex-row">

                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                            </div>


                    

                                        </div>
                

                                    </div><!--card-->                   

                                </div><!--col-->



                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2" data-aos="zoom-in"  data-aos-delay="400" data-aos-duration="1000">
                                    <div class="card pro-card mycardtitle">
                
                                        <span class="percent">Sale%</span> 
                                        <div class="card-image">
                
                                            <img src="pics/pro07.jpg" class="card-img">                           
                                            <img class="hover-img" src="pics/pro77.jpg"> 

                                        </div>  

                                        <div class="card-title p-1">
                                            <h4>The ZENEME Store</h4>
                                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹328</h6>
                                            <p><a href="" class="text-decoration-none">Silver Toned Green Cubic Zirconia studded Floral Shaped Cute Pendant with Earrings Jewellery</a></p>
                                        </div>


                                        <div class="d-flex justify-content-between align-items-center p-2">


                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                            <div class="d-flex flex-row">

                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                            </div>
                                        </div>
                

                                    </div><!--card-->                   

                                </div><!--col-->
                            </div>
                        </div>

<!-----------------------------------second tab-------------------------------------------------------->



                        <div id="viewed" class="tab-pane fade">
                                    <div class="row mx-auto justify-content-center">

                                        <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                            <div class="card pro-card mycardtitle">
                
                                                <span class="percent">Sale%</span> 
                                                <div class="card-image">
                
                                                <img src="pics/brac.webp" class="card-img img-fluid">                           
                                                <img class="hover-img" src="pics/dia.jpg"> 

                                            </div>  

                        <div class="card-title p-1">
                            <h4> The Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3">₹999</s>₹202</h6>
                            <p><a href="" class="text-decoration-none">Butterfly Ear Cuff Crawler AD & Pearl Gold Plated Pearl Chain Drop Stud Earrings For Girls Women</a></p>   
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pics/3pro.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/4pro.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>Shining Diva Fashion</h4>
                                <h6>M.R.P:<s class="me-3">₹1,995</s>₹314</h6>
                                <p><a href="" class="text-decoration-none">Angel Wings Platinum Plated Crystal Pendant Necklace Jewellery Set Gifts for Women & girls</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pics/pro23.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro32.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h5> The university Trendz store</h5>
                            <h6>M.R.P:<s class="me-3">₹999</s>₹212</h6>
                            <p><a href="" class="text-decoration-none">University Trendz 18k Rhodium Plated Antique Blue charm Bracelet for Girls</a></p>   
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        <span class="percent">Sale%</span> 
                        <div class="card-image">
                
                            <img src="pics/prod.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/prod1.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>Shining Diva Fashion</h4>
                            <h6>M.R.P:<s class="me-3">₹2,449</s>₹349</h6>
                            <p><a href="" class="text-decoration-none">Shining Diva Fashion Crystal Pearl Necklace Set For Women/Jewellery Set with Earrings for Women & Girls</a></p>    
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->



               <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pics/pro07.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro00.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>The Lucky Bella Store</h4>
                            <h6>M.R.P:<s class="me-3">₹2,999</s>₹295</h6>
                            <p><a href="" class="text-decoration-none">YouBella Jewellery for women Traditional Gold Plated Bangles for Women and Girls</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pics/pro11.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/11pro.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>The Shreyadzines Store</h4>
                            <h6>M.R.P:<s class="me-3">₹1,299</s>₹474</h6>
                            <p><a href="" class="text-decoration-none">Shreyadzines Non-Precious Metal Ghungroo Anklet for Women & Girl's</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light"  style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        <span class="percent">Sale%</span> 
                        <div class="card-image">
                
                            <img src="pics/pro12.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro21.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>Shining Diva Fashion</h4>
                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹299</h6>
                            <p><a href="" class="text-decoration-none">Shining Diva Fashion 18k Rose Gold Stylish Bracelet for Women and Girls</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->



                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        
                        <div class="card-image">
                
                            <img src="pics/pro14.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro41.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>Yellow Chimes Store</h4>
                            <h6>M.R.P:<s class="me-3">₹1,071</s>₹319</h6>
                            <p><a href="" class="text-decoration-none">Yellow Chimes Silver Tone White Pearl Stone Multi-Layer Bracelet for Women</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        <span class="percent">Sale%</span> 
                        <div class="card-image">
                
                            <img src="pics/pro12.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro21.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>Shining Diva Fashion</h4>
                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹299</h6>
                            <p><a href="" class="text-decoration-none">Shining Diva Fashion 18k Rose Gold Stylish Bracelet for Women and Girls</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                       
                        <div class="card-image">
                
                            <img src="pics/pro15.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro51.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>The Clara Store</h4>
                            <h6>M.R.P:<s class="me-3">₹3,998</s>₹1,894</h6>
                            <p><a href="" class="text-decoration-none">Clara 925 Sterling Silver Oval stone Ring with Adjustable Band | Gift for Women Wife Girls</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->



                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        <span class="percent">Sale%</span> 
                        <div class="card-image">
                
                            <img src="pics/pro@.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/@pro.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4> the Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3">₹999</s>₹249</h6>
                            <p><a href="" class="text-decoration-none">Geometric Stainless Steel Black Silver Locket Pendant Necklace Chain For Men</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pics/pro17.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro71.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>The Memoir Store</h4>
                            <h6>M.R.P:<s class="me-3">₹1,499</s>₹699</h6>
                            <p><a href="" class="text-decoration-none">Memoir Gold plated Single Imitation Diamond Solitaire Engagement, Wedding Party Finger ring Men</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pics/pro18.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/pro81.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>The ZAVYA  Store</h4>
                            <h6>M.R.P:<s class="me-3">₹2,238</s>₹1,975</h6>
                            <p><a href="" class="text-decoration-none">ZAVYA 925 Sterling Silver Studded and Cubic Zirconia CZ Solitaire Rhodium Plated Lovers Couple Rings</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->



                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        <span class="percent">Sale%</span> 
                        <div class="card-image">
                
                            <img src="pics/pro@.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/@pro.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4> the Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3">₹999</s>₹249</h6>
                            <p><a href="" class="text-decoration-none">Geometric Stainless Steel Black Silver Locket Pendant Necklace Chain For Men</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->



                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                        
                        <div class="card-image">
                
                            <img src="pics/pro09.jpg" class="card-img">                           
                            <img class="hover-img" src="pics/men2.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>The Fashion Frill</h4>
                            <h6>M.R.P:<s class="me-3">₹999</s>₹279</h6>
                            <p><a href="subpro3.html" class="text-decoration-none">Charm Tiger Eye's Stone Adjustable Chain Bracelet For Men Boys Accessories For Men</a></p>
                         </div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->


                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                    <div class="card pro-card mycardtitle">
                
                         
                        <div class="card-image">
                
                            <img src="pdimg/brac1.jpg" class="card-img">                           
                            <img class="hover-img" src="pdimg/brac4.jpg"> 

                        </div>  

                        <div class="card-title p-1">
                            <h4>Okos</h4>
                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹89</h6>
                            <p><a href="subpro2.html" class="text-decoration-none">Pink Flowers Link Chain Adjustable Size Charm Alloy Bracelet Decorated With Crystals for Girls</a></p>
                         </div>
                         <div>heelo pink flower link cha in</div>


                        <div class="d-flex justify-content-between align-items-center p-2">


                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                            <div class="d-flex flex-row">

                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                            </div>


                    

                        </div>
                

                    </div><!--card-->                   

                </div><!--col-->

                </div>                     
            </div>
 

<!--------------------------------------third tab--------------------------------------------------->



                            <div id="new" class="tab-pane fade">
                                    <div class="row mx-auto justify-content-center">

                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">                        
                                                        <div class="card-image">
                
                                                            <img src="pics/pro23.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/pro32.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h5> The university Trendz store</h5>
                                                            <h6>M.R.P:<s class="me-3">₹999</s>₹212</h6>
                                                            <p><a href="" class="text-decoration-none">University Trendz 18k Rhodium Plated Antique Blue charm Bracelet for Girls</a></p>   
                                                        </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">
                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>
                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->


                
                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                                                        <span class="percent">Sale%</span> 
                                                        <div class="card-image">
                
                                                            <img src="pics/pro12.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/pro21.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h4>Shining Diva Fashion</h4>
                                                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹299</h6>
                                                            <p><a href="" class="text-decoration-none">Shining Diva Fashion 18k Rose Gold Stylish Bracelet for Women and Girls</a></p>
                                                         </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>


                    

                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->


                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                         
                                                        <div class="card-image">
                
                                                            <img src="pics/pro17.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/pro71.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h4>The Memoir Store</h4>
                                                            <h6>M.R.P:<s class="me-3">₹1,499</s>₹699</h6>
                                                            <p><a href="" class="text-decoration-none">Memoir Gold plated Single Imitation Diamond Solitaire Engagement, Wedding Party Finger ring Men</a></p>
                                                        </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>


                    

                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->




                
                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                         
                                                        <div class="card-image">
                
                                                            <img src="pdimg/brac1.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pdimg/brac4.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h4>Okos</h4>
                                                            <h6>M.R.P:<s class="me-3">₹1,999</s>₹89</h6>
                                                            <p><a href="subpro2.html" class="text-decoration-none">Pink Flowers Link Chain Adjustable Size Charm Alloy Bracelet Decorated With Crystals for Girls</a></p>
                                                        </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>

                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->



                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                         
                                                        <div class="card-image">
                
                                                            <img src="pics/pro23.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/pro32.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h5> The university Trendz store</h5>
                                                            <h6>M.R.P:<s class="me-3">₹999</s>₹212</h6>
                                                            <p><a href="" class="text-decoration-none">University Trendz 18k Rhodium Plated Antique Blue charm Bracelet for Girls</a></p>   
                                                        </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>

                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->


                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                                                        <span class="percent">Sale%</span> 
                                                        <div class="card-image">
                
                                                            <img src="pics/prod.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/prod1.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h4>Shining Diva Fashion</h4>
                                                            <h6>M.R.P:<s class="me-3">₹2,449</s>₹349</h6>
                                                            <p><a href="" class="text-decoration-none">Shining Diva Fashion Crystal Pearl Necklace Set For Women/Jewellery Set with Earrings for Women & Girls</a></p>    
                                                        </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>
                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->



                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                         
                                                        <div class="card-image">
                
                                                            <img src="pics/pro07.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/pro00.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h4>The Lucky Bella Store</h4>
                                                            <h6>M.R.P:<s class="me-3">₹2,999</s>₹295</h6>
                                                            <p><a href="" class="text-decoration-none">YouBella Jewellery for women Traditional Gold Plated Bangles for Women and Girls</a></p>
                                                         </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light" style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>

                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->


                                                <div class="col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                                    <div class="card pro-card mycardtitle">
                
                         
                                                        <div class="card-image">
                
                                                            <img src="pics/pro11.jpg" class="card-img">                           
                                                            <img class="hover-img" src="pics/11pro.jpg"> 

                                                        </div>  

                                                        <div class="card-title p-1">
                                                            <h4>The Shreyadzines Store</h4>
                                                            <h6>M.R.P:<s class="me-3">₹1,299</s>₹474</h6>
                                                            <p><a href="" class="text-decoration-none">Shreyadzines Non-Precious Metal Ghungroo Anklet for Women & Girl's</a></p>
                                                        </div>


                                                        <div class="d-flex justify-content-between align-items-center p-2">


                                                            <button class="btn text-uppercase btn-sm details text-light"  style="background-color: #566b90;">Details</button>


                                                            <div class="d-flex flex-row">

                                                                <span class="wishlist"><i class="fa fa-heart"></i></span>
                                                                <span class="cart"><i class="fa fa-shopping-cart"></i></span>
                        
                                                            </div>

                                                        </div>
                

                                                    </div><!--card-->                   

                                                </div><!--col-->

                                            </div><!-----inner tab row----->
                                         </div><!-----inner tab contianer------>
                                    </div><!-----content tab------->

                    </div><!-----blank div----->


                </div><!------head column----------->
            </div><!---------head row-------->
        </div><!---head container---->



@endsection

@section('lastcontent')



        <!---rating card--->

        <div class="container p-5 mt-3" data-aos="fade-up" data-aos-duration="3000">
            <h2 class="title text-center">WHAT CLIENTS SAY</h2>
            <div class="row p-2 shadow">
                <div class="col-md-3  col-sm-6 testimonials" data-aos="fade-up" data-aos-duration="3000">
                    <p>Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc.</p> 
                    <img src="pics/review1.webp">  
                    <p class="details"><b>shreya</b></p>
                </div>


                <div class="col-md-3 col-sm-6 testimonials" data-aos="fade-up" data-aos-duration="3000">
                    <p>Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc.</p> 
                    <img src="pics/revview2.jpg">  
                    <p class="details"><b>john</b></p>
                </div>


                <div class="col-md-3 col-sm-6 testimonials" data-aos="fade-up" data-aos-duration="3000">
                    <p>Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc.</p> 
                    <img src="pics/review5.jpg">  
                    <p class="details"><b>ansh & saya</b></p>
                </div>

                <div class="col-md-3 col-sm-6 testimonials" data-aos="fade-up" data-aos-duration="3000">
                    <p>Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc.</p> 
                    <img src="pics/review4.jpg">  
                    <p class="details"><b>ayushi</b></p>
                </div>

                

            </div>

        </div>

        <!---rating card end---->

        <!----FAQ-->

        <div class="mt-4 mb-3" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="text-center">Best fashion jewellery Brand in India</h2>
            <p>Welcome to Unijewelux, India's fastest growing jewellery brand. With our unwavering commitment to excellence, we have established ourselves as a trusted name in the industry. Over the past year alone, we have successfully delivered an impressive 60,000 orders to satisfied customers across the country.

                As a testament to our credibility, we are proud to share that our brand has been supported and funded by the Government of India. This endorsement reflects the quality and reliability of our products and services.
                
                At Unijewelux, we specialize in crafting high-quality jewellery for both men and women. Our exquisite collection showcases a wide range of designs, ensuring that there is something for everyone. From timeless classics to contemporary pieces, we offer jewellery that caters to diverse tastes and preferences.
                
                We prioritize customer satisfaction, which is why we offer a hassle-free return and exchange policy within 7 days of purchase. Additionally, our fast shipping ensures that you receive your order promptly, allowing you to enjoy your new jewellery without delay.
                
                Experience the elegance and craftsmanship of Unijewelux. Shop with us today and elevate your style with our stunning jewellery pieces.</p>
        </div>
        <div class="container-fluid">
            <div class="mt-2 row">
                <h2 class="text-center">Frequently Asked Questions</h2>
                <div class="col"  data-aos="fade-right" data-aos-delay="50"  data-aos-duration="1000">
                    <div class="d-grid"><h4 data-bs-toggle="collapse" data-bs-target="#box" class="btn border-0 d-flex justify-content-start ">How should we store artificial jewellery so that they last long?</h4></div>
                    <div class="collapse shadow" id="box">
                        <p>To maintain the lustre and polish of artificial jewellery, store it in airtight, cloth-lined boxes that prevent direct contact with air. Keep different jewels in separate compartments to avoid marks caused by brushing. Unijewelux also offers Micro-fiber Pouch, which keeps your jewellery safe and protects shine</p>                
                    </div>
                    <hr class="mt-0" style="width: 90%; background-color: #000; height: 2px">

                </div>
            </div>
            <div class="row">
                <div class="col"  data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="d-grid"><h4 data-bs-toggle="collapse" data-bs-target="#boxed" class="btn border-0 d-flex justify-content-start">Things to keep in mind before buying jewellery online?</h4></div>
                    <div class="collapse shadow" id="boxed">
                        <p>When buying designer jewellery online, the design is important, but so is the legitimacy of the online store. Always look for authentic pictures, brand's credibility and availability of COD option. Unijewelux is backed by Startup India, Government of India</p>
                    </div>
                        <hr class="mt-0" style="width: 90%; background-color: #000; height: 2px">
                </div>
            </div>


            <div class="row">
                <div class="col"  data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">
                    <div class="d-grid"><h4 data-bs-toggle="collapse" data-bs-target="#boxies" class="btn border-0 d-flex justify-content-start ">Which is the top-rated western jewellery brand in India?</h4></div>
                    <div class="collapse shadow" id="boxies">
                    <p>Unijewelux Accessories is the best and fastest growing korean and western jewellery brand in India, they have 6,000+ 5 Star reviews and they have delivered 60,000 orders in just 1 year of business.</p>
                    </div>
                    <hr class="mt-0" style="width: 90%; background-color: #000; height: 2px">

                </div>
            </div>


            <div class="row">
                <div class="col"  data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <div class="d-grid"><h4 data-bs-toggle="collapse" data-bs-target="#bonny" class="btn border-0 d-flex justify-content-start ">Which is the best korean jewellery brand in india?</h4></div>
                    <div class="collapse shadow" id="bonny">
                        <p>Unijewelux Accessories is the India's first korean jewellery brand. They have 1000+ high quality products including necklaces, bracelets, earrings, and rings. They also provide 7 days hassle free return and exchange.</p>
                    </div>
                    <hr class="mt-0" style="width: 90%; background-color: #000; height: 2px">

                </div>
            </div>


            <div class="row">
                <div class="col"  data-aos="fade-right" data-aos-delay="250" data-aos-duration="1000">
                    <div class="d-grid"><h4 data-bs-toggle="collapse" data-bs-target="#bot" class="btn border-0 d-flex justify-content-start ">Do you have a return/exchange policy?</h4></div>
                    <div class="collapse shadow" id="bot">
                        <p>Not Lovin' It? We've Got Your Back! We offer 7 days hassle-free Returns and exchange guaranteed, you can visit our refunds policy for more details</p>
                    </div>
                    <hr class="mt-0" style="width: 90%; background-color: #000; height: 2px">

                </div>
            </div>
        
        </div>
    


        <!---FAQ end-->

@endsection


<!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init(); // Initialize AOS
    </script>

        <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>

    
    
       