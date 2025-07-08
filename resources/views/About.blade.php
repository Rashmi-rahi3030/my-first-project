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
    

<div class="container-fluid">
    <div class="row">
        <img src="pics/about.png">
        <h2 style="color: #BC8F8F;" class="mt-5">WHO ARE WE?</h2>
        <h5>Jewelry should elevate and empower your everyday. Why should Jewelry only be for those

            special moments, when Jewelry<br> helps make every moment just that little more special?
            
            Our mission has always been to create high quality, unique Jewelry <br>which is accessible to
            
            all. All our pieces are designed to be as versatile and wearable as possible, elevating your
            
            style<br> effortlessly without breaking the bank. Last minute event? No problem! We design
            
            those go-to throw on rings & earrings<br> that never fail to disappoint, complimenting any
            
            outfit and every occasion, never leaving you under, or overdressed.<br><br></h5>
    </div>
    <div class="row mt-5">
        <h1>JEWELRY SHOULD ELEVATE & EMPOWER YOUR EVERYDAY</h1>
        <img src="pics/about.jpg" class="w-50 mt-2">

    </div>
    <div class="row">
        <div class="d-flex flex-direction-column"><h2 style="color: #BC8F8F;" class="mt-5 ms-auto">WHAT ARE YOU CELEBRATING TODAY?</h2></div>
            <div class="d-flex flex-direction-column"><h5 class="ms-auto">We believe you can accomplish anything with optimism and a powerful attitude, and<br>
                 are always looking for the moments that make life meaningful. We want to encourage<br>
                  you to embrace the ongoing celebration of life, to cherish the small moments that<br><br>
                   make life precious, and to realise that life is so much more beautiful when you’re the<br>
                   best version of yourself. Our goal is to dress you up in the most effortless and<br>
                    attainable way, so you can sparkle throughout the daily celebration of your life and seal<br>
                    those precious moments together with us. Let’s invite many more people to the party</h5>
        </div>
    </div>
    
    <div class="row">
        <h2 style="color: #BC8F8F;" class="mt-5">PROCESS & lESS WASTE MISSION</h2>
        <h5>Almost all of our packaging is recyclable or made from recycled materials. With the aim of being 100%<br>

            recyclable in the near future.<br><br>
            
            To avoid over production, we always release new products in small batches and if you guys love it and<br>
            
            want more…we’ll make more. This is done with our smart-savvy forecasting data and of course, you! Our<br>
            
            CS and social team are always passing on your feedback straight back to the design team which helps us<br>
            
            tweak products and plan for future production. When it comes to releasing new products, we don’t<br>
            
            adhere to typical seasonal launches as we believe that any we design and create will stand the test of<br>
            
            time, not the season. Because of this we try to release little and often, this helps us learn as we go and<br>
            
            test new designs constantly!</h5>
    </div>
</div>


    @endsection
    @extends('header')

            <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>

    
</body>
</html>