<?php ?>
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="">

    <title>Talkyher | Add Personality</title>
    <link rel="icon" type="image/x-icon" href="/images/fav.jpeg"/>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="/plugins/icofont/icofont.min.css">
    <!-- Themify Css -->
    <link rel="stylesheet" href="/plugins/themify/css/themify-icons.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="/plugins/animate-css/animate.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="/plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/plugins/slick-carousel/slick/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('userListing')}}">
            <h2 class="text-white text-capitalize"></i>Person<span class="text-color">ality</span></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
                aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-view-list"></span>
        </button>
        <div class="collapse text-center navbar-collapse" id="navbarsid">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('userListing')}}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('userCreate')}}">Add Personality<span class="sr-only">(current)</span></a>
                </li>


            </ul>

        </div>
    </div>
</nav>

<div class="main-wrapper ">
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="{{route('userListing')}}" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">|</span></li>
                        <li class="list-inline-item"><a href="#" class="text-color text-uppercase text-sm letter-spacing">Personality</a></li>
                    </ul>
                    <h1 class="text-lg text-white mt-2">Add Personalities</h1>
                </div>
            </div>
        </div>
    </section>


    <!-- Header Close -->
    <div class="container" style="margin-top: 132px;">
        <form method="post" enctype="multipart/form-data" action="{{route('userSave')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="inputPassword4" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Phone no</label>
                    <input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="Phone no">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Father Name</label>
                    <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">CNIC No.</label>
                    <input type="text" name="cnic" class="form-control" id="inputPassword4" placeholder="CNIC No.">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity">
                </div>
                <div class="col-md-2 form-group" >
                    <label for="inputState">State</label>
                    <input type="text" name="state" class="form-control" placeholder="State">
                </div>
                <div class="col-md-2 form-group" >
                    <label for="inputState">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="State" style="height: 48px;">
                </div>
                <div class="col-md-2 form-group">
                    <label for="inputState">Date of Death</label>
                    <input type="date" name="dod" class="form-control" placeholder="State" style="height: 48px;">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Religion</label>
                    <select id="inputState" name="religion" class="form-control" style="height: 49px;">
                        <option disabled selected value="">Choose...</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Non-Muslim">Non-Muslim</option>

                    </select>
                </div>
            </div>
            <div class="custom-file mb-3">
                <label class="custom-file-label" for="customFile">Choose file</label>
                <input type="file" name="image" class="custom-file-input" id="customFile">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="genderbtn">
                <label for="inputGender">Gender</label>
                <div class="gender row mb-3">
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check ml-4">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                        <label class="form-check-label" for="exampleRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>



    <!-- footer Start -->
    <footer class="footer bg-black-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <h2 class="text-white mb-4">Personality</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores, sint nostrum omnis eaque cumque dolorum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>


                <div class="col-lg-3 col-md-5">
                    <div class="footer-widget">
                        <h4 class="mb-4 text-white letter-spacing text-uppercase">Home location</h4>
                        <p>Washington 6036 Richmond
                            hwy., Alexandria, VA USA 22303 </p>
                        <span class="text-white">+1 (409) 987–5874</span>
                        <span class="text-white">info@demolink.org</span>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</div>

<!--
 Essential Scripts
 =====================================-->


<!-- Main jQuery -->
<script src="/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.1 -->
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="/plugins/slick-carousel/slick/slick.min.js"></script>
<!--  Magnific Popup-->
<script src="/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- Form Validator -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="/plugins/google-map/gmap.js"></script>

<script src="/js/script.js"></script>

</body>

</html>
