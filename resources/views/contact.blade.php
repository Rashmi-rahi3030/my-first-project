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
    


        <!----contact form-->
        
        <div class="container-fluid p-5">
            <div class="row bg-light">
                <div class="col-md-6 col-sm-12 col-xs-12 shadow bg-transparent pb-4">
                    <h1 class="text-center">Contact Form</h1>
                    <form id="contact_form" name="contact_form" method="post">
                        <div class="mb-5 row">
                            <div class="col">
                                <label>First Name</label>
                                <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name" placeholder="First name">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <label>Last Name</label>
                                <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name" placeholder="last name">
                            </div>

                        </div>
                        <div class="mb-5 row">
                            <div class="col">
                                <label for="email_addr">Email address</label>
                                <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
                                placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <label for="phone_input">Phone</label>
                                <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
                                placeholder="Phone">
                            </div>

                        </div>
                        <div class="mb-5">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 btn-lg">Submit</button>
                    </form>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3504.840490529013!2d77.2061255027786!3d28.54451380097701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1700286227112!5m2!1sen!2sin" class=" w-100" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div><!----row-->

            <div class="row mt-5">
                <div class="col text-center">
                    <i class="fa-solid fa-location-dot fa-2x"></i>
                    <p><b>Address:</b>4/115, Khichripur,<br> delhi-110092</p>
                </div>

                <div class="col text-center">
                    <i class="fa-solid fa-phone fa-2x"></i>
                    <p><b>Phone:</b><a href="" style="text-decoration: none;">+919953900683</a></p>
                </div>

                <div class="col text-center">
                    <i class="fa-solid fa-paper-plane fa-2x"></i>
                    <p><b>E-mail:</b><a href="" style="text-decoration: none;">nauni8564@gmail.com</a></p>
                </div>

                <div class="col text-center">
                    <i class="fa-solid fa-earth-americas fa-spin-reverse fa-2x"></i>
                    <p><b>Website:</b><a href="" style="text-decoration: none;">blogstart.com</a></p>
                </div>
            </div>
        </div><!---container end-->


    @endsection
    @extends('header')
            <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>