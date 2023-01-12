<?php ?>
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">

    <meta name="author" content="">

    <title>Personality | {{$data->first_name.' '.$data->last_name}}</title>
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
                    <a class="nav-link" href="{{route('userCreate')}}">Add Personality<span
                            class="sr-only">(current)</span></a>
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
                        <li class="list-inline-item"><a href="{{route('userListing')}}"
                                                        class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a>
                        </li>
                        <li class="list-inline-item"><span class="text-white">|</span></li>
                        <li class="list-inline-item"><a href="#"
                                                        class="text-color text-uppercase text-sm letter-spacing">Personality</a>
                        </li>
                    </ul>
                    <h1 class="text-lg text-white mt-2">Personality</h1>
                </div>
            </div>
        </div>
    </section>


    <!-- Header Close -->

    <!-- Section About start -->
    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <img src="{{asset($data->image)}}" alt="" class="img-fluid" style="height: 500px;">
                </div>
                <!-- <div class="col-lg-3 mt-lg-4 col-md-6">
                    <img src="/images/about/img-7.jpg" alt="" class="img-fluid">
                </div> -->
                <div class="col-lg-8 col-md-12">
                    <div class="about-item position-relative mt-5 mt-lg-0">
                        <span class="h5 text-lg text-muted">{{$data->first_name.' '.$data->last_name}}</span>
                        <!-- <h2 class="mt-1 mb-3">Having <span class="text-color">10 years</span> of experience in fitness</h2> -->

                        <!-- <p class="mb-4">Meet Amelia - she’s an inspired mother, community member, and gardener, with a real passion for coaching others to achieve their relationship goals and personal goals! Her previous background in Science, Education and Sustainability shows she’s the type who is able to see issues through a grounded, realistic lens, and then provide actionable advice that actually works, while she guides you compassionately along the way, step by step! Well-traveled and open-minded, she is familiar with a variety of therapeutic tools and skills that have helped her reach her own goals, and which she actively uses in coaching. Her range of specialties is diverse: addiction, anxiety, communication techniques, experiences with discrimination, healing from toxic or abusive dynamics, sustainable mental habits, effective parenting, trauma recognition/healing from trauma, true grief, and even mid-life crises. Amelia wants you to know she sees you and is and at the ready to coach you through almost anything—she’ll be your best teammate and cheerleader in one! Above all, she wants to give you the keys to interconnectedness with the ones you love the most</p> -->
                        <!-- <a href="index.html" class="btn btn-primary">Book</a> -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">Book</button> -->
                        <!-- <a href="service.html" class="btn btn-main">Services<i class="ti-angle-right ml-2"></i></a> -->
                        <table class="table table-striped">
                            <!-- <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead> -->
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>First Name</td>
                                <td>{{$data->first_name}}</td>
                                <td>Last Name</td>
                                <td>{{$data->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Email Address</td>
                                <td>{{$data->email}}</td>
                                <td>Phone No</td>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Father Name</td>
                                <td>{{$data->father_name}}</td>
                                <td>CNIC No.</td>
                                <td>{{$data->cnic}}</td>

                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Address</td>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Address2</td>
                                <td>{{$data->address2}}</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>City</td>
                                <td>{{$data->city}}</td>
                                <td>State</td>
                                <td>{{$data->state}}</td>

                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Date Of Birth</td>
                                <td>{{$data->dob}}</td>
                                @if($data->dod)
                                    <td>Date Of Death</td>
                                    <td>{{$data->dod}}</td>
                                @else
                                    <td>User Status</td>
                                    <td>Alive</td>
                                @endif
                                <td>Religion</td>
                                <td>{{$data->religion}}</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Gender</td>
                                <td>{{$data->gender}}</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Description</td>
                                <td>{{$data->description}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About End -->

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
