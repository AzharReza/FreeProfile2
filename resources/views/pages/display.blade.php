<?php ?>
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">

    <!-- theme meta -->
    <meta name="theme-name" content="Talkyher"/>

    <meta name="author" content="">

    <title>Personality</title>
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


<!-- Section Menu Start -->
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


<!-- Header Close -->

<div class="main-wrapper ">
    <!-- Section Menu End -->

    <!-- Section Slider Start -->
    <!-- Slider Start -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <span class="h6 d-inline-block mb-4 subhead text-uppercase">Talkyher</span>
                    <h1 class="text-uppercase text-white mb-5">Step up your <span class="text-color">Talkyher</span><br>with
                        us</h1>
                    <a href="pricing.html" target="_blank" class="btn btn-main ">Join Us <i
                            class="ti-angle-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Slider End -->

    <!-- Section Intro Start -->
    <section class="mt-80px pt-5 mb-5">
        <div class="container">
            <h1 class="text-center mb-4">Personalities</h1>
            <div class="row ">
                @if($users->count()>0)
                @foreach($users as $user)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{$user->image??'/images/user.png'}}" alt="" class="img-fluid" style="height: 300px; max-width: 100%;">
                        <div class="card-body">
                            <h2 class="card-title">{{$user->first_name.' '.$user->last_name}}</h2>
                            <h5>Father Name : {{$user->father_name}}</h5>
                            <!-- <p class="card-text">Meet Amelia - she’s an inspired mother, community member, and gardener, with a real passion for coaching others to achieve their relationship goals and personal <a href="amelia.html" target="_blank">Read more...</a> </p> -->

                            <a href="{{route('userShow',$user)}}" class="btn btn-primary">View Details</a>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View Details</button> -->

                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="justify-content-center">No Data Found</div>
                @endif
                {{--<div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/images/user.png" alt="" class="img-fluid" style="height: 300px; max-width: 100%;">
                        <div class="card-body">
                            <h2 class="card-title">Suleman Bhatti</h2>
                            <h5>Father Name : Farooq</h5>
                            <!-- <p class="card-text">Brandy has been a professional life coach for over ten years as a private life coach and working for coaching <a href="brandy.html" target="_blank">Read more...</a></p> -->
                            <a href="suleman.html" class="btn btn-primary">View Details</a>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View Details</button> -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/images/user.png" alt="" class="img-fluid" style="height: 300px;">
                        <div class="card-body">
                            <h2 class="card-title">Muhammad Ahmad</h2>
                            <h5>Father Name : </h5>
                            <!-- <p class="card-text">Dr. Channa is an international, award-winning Matchmaker, Dating & Relationship Coach, who has been featured as <a href="channa.html" target="_blank">Read more...</a></p> -->
                            <a href="ahmad.html" class="btn btn-primary">View Details</a>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View Details</button> -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="/images/user.png" alt="" class="img-fluid" style="height: 300px;">
                        <div class="card-body">
                            <h2 class="card-title">Muhammad Arslan</h2>
                            <h5>Father Name : </h5>
                            <!-- <p class="card-text">A compassionate but direct coach, Anya has personal and professional experience with a variety of situations which has all provided her with the tools for identifying the needs <a href="jessica.html" target="_blank">Read more...</a></p> -->
                            <a href="arslan.html" class="btn btn-primary">View Details</a>
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View Details</button> -->

                        </div>
                    </div>
                </div>--}}
            </div>
    </section>
    <!-- Section Intro End -->


    <!--Start Popup Section-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book a Coach</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Phone no</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" placeholder="Address">
                            </div>
                        </div>
                        <!--Start date picker-->
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Date Time</label>
                            <div class="col-sm-10">
                                <input type="date" class="col-sm-6 " id="date" name="date">
                                <input type="time" class="col-sm-5 " id="appt" name="appt">
                            </div>
                        </div>
                        <!--End date picker-->


                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                               value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                               value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--End Popup Section-->

    <!-- Section Footer Start -->
    <!-- footer Start -->
    <footer class="footer bg-black-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <h2 class="text-white mb-4">Personality</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores,
                        sint nostrum omnis eaque cumque dolorum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>


                <!-- <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="footer-widget recent-blog">
                        <h4 class="mb-4 text-white letter-spacing text-uppercase">Recents Posts</h4>
                        <div>
                            <a href="blog-single.html"class="text-white">Claritas est etiam processus dynamicus</a>
                            <p class="text-sm mt-2 text-white-50">30 february 2019</p>
                        </div>
                        <div class="mt-4">
                            <a href="blog-single.html"class="text-white">Claritas est etiam processus dynamicus</a>
                            <p class="text-sm mt-2 text-white-50">30 february 2019</p>
                        </div>

                    </div>
                </div> -->
                <!-- <div class="col-lg-2 col-md-5 mb-5 mb-lg-0">
                    <div class="footer-widget">
                        <h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
                        <ul class="list-unstyled footer-menu lh-40 mb-0">
                            <li><a href="about.html"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
                            <li><a href="service.html"><i class="ti-angle-double-right mr-2"></i>Services</a></li>
                            <li><a href="pricing.html"><i class="ti-angle-double-right mr-2"></i>Membership</a></li>
                            <li><a href="course.html"><i class="ti-angle-double-right mr-2"></i>Courses</a></li>
                            <li><a href="contact.html"><i class="ti-angle-double-right mr-2"></i>Contact us</a></li>
                        </ul>
                    </div>
                </div> -->
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

            <!-- <div class="row align-items-center mt-5 px-3 bg-black mx-1">
                <div class="col-lg-4">
                    <p class="text-white mt-3">Gymfit © 2019 , Theme By <a href="https://themefisher.com/" class="text-color">Themefisher.com</a></p>
                </div> -->
            <!-- <div class="col-lg-6 ml-auto text-right">
                <ul class="list-inline mb-0 footer-socials">
                    <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/themefisher/"><i class="ti-github"></i></a></li>
                </ul>
            </div> -->
        </div>
</div>
</footer>
<!-- Section Footer End -->

<!-- Section Footer Scripts -->
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

