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
    @extends('footer')
    @section('midcontent')



        <div class="container-fluid p-2">
            <div class="row shadow">
                <div class="col">
                    <h6>Over all result for "Jewellery"</h6>
                </div>

                <div class="col">
                    <div class="btn border-0 dropdown d-flex"><a href="#" style="text-decoration: none;" class="dropdown-toggle text-dark ms-auto" data-bs-toggle="dropdown" data-bs-target="#box">Short by: Featured</a><!---main col-->

                    <div class="dropdown-menu" id="box">
                        <a href="" style="text-decoration: none;" class="text-dark">price: low to high</a><br>
                        <a href="" style="text-decoration: none;" class="text-dark">price: high to low</a><br>
                        <a href="" style="text-decoration: none;" class="text-dark">Avg: customer Review</a><br>
                        <a href="" style="text-decoration: none;" class="text-dark">Newest Arrival</a><br>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
            <div class="col-md-2 col-sm-3">


            <div class="row">
            
                <div class="col">
                <h3>Category</h3>
                <a href="" style="text-decoration: none;" class="text-dark">diamond Jewellery</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">All Jewellery</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">Women's Jewellery</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Women's Jewelry Sets</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Women's Necklaces</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Women's Earrings</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Women's Bracelets</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Women's Rings</a><br>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                <h3>Brands</h3>
                <a href="" style="text-decoration: none;" class="text-dark">Shining Diva Fashion</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">YouBella</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">Atasi International</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Lucky Jewellery</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Priyaasi</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Yellow Chimes</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">VOYLLA</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Lucky Jewellery</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Clara</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Mahi</a><br>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                <h3>Jewellery Types</h3>
                <a href="" style="text-decoration: none;" class="text-dark">Fashion</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">Diamond</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">Pearl</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Artificial</a><br>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                <h3>Price</h3>
                <a href="" style="text-decoration: none;" class="text-dark">Under ₹250</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">₹250 - ₹500</a><br>               
                <a href="" style="text-decoration: none;" class="text-dark">₹500 - ₹1,000</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">₹1,000 - ₹5,000</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">₹5,000 - ₹10,000</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">₹10,000 - ₹20,000</a><br>
                <a href="" style="text-decoration: none;" class="text-dark">Over ₹20,000</a><br>

                </div>
            </div>

            
            </div><!---col-->


            <div class="col-md-10 col-sm-9">
              <div class="container">
                <div class="row">  
                    <div class="d-flex flex-direction-row"><a href="product.html" class="text-danger mb-4 ms-auto">To see more</a></div>

                                    <div class="col col-md-6 col-lg-4 col-xl-3 col-sm-6 mt-2 ">
                                        <div class="card pro-card mycardtitle">                
                                            <span class="percent">Sale%</span> 
                                            <div class="card-image">               
                                                <img src="pics/pro1.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro2.jpg"> 
                                            </div><!---card img close----->

                                            <div class="card-title p-1">
                                                <h4>Shining Diva</h4>
                                                <h6>M.R.P:<s class="me-3">₹1,947</s>₹475</h6>
                                                <p><a href="subpro1.html" class="text-decoration-none">Crystal Butterfly Earrings Chain Pendant Necklace Combo Jewellery Set for Women</a></p>
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


                                    <div class="col col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
                                        <div class="card pro-card mycardtitle">
                
                                            <span class="percent">Sale%</span> 
                                            <div class="card-image">
                
                                                <img src="pics/pro3.jpg" class="card-img">                           
                                                <img class="hover-img" src="pics/pro4.jpg"> 
                                            </div><!----card img--->

                                            <div class="card-title p-1">
                                                <h4>Shining Diva Fashion</h4>
                                                <h6>M.R.P:<s class="me-3">₹3,999</s>₹349</h6>
                                                <p><a href="subpro4.html" class="text-decoration-none">Shining Diva Fashion Royal Blue Crystal CZ Silver Plated Stylish Bracelet Gift for Girls</a></p>
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

                
                                    <div class=" col col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
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


                                    <div class=" col col-md-6 col-sm-6 col-lg-4 col-xl-3 mt-2">
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


            </div><!--row-->
        </div><!--container-->



            </div>


            </div><!--row-->
        </div><!--container-->


    @endsection
    @extends('header')
            <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>