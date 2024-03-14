<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact | E-flower</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</head><!--/head-->

<body>
    <header id="header">
        <!--header-->
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo4.png" alt="" /></a>
                        </div>
                        <!-- <div class="btn-group pull-right">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-default dropdown-toggle usa"
                    data-toggle="dropdown"
                  >
                    USA
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Canada</a></li>
                    <li><a href="#">UK</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-default dropdown-toggle usa"
                    data-toggle="dropdown"
                  >
                    DOLLAR
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Canadian Dollar</a></li>
                    <li><a href="#">Pound</a></li>
                  </ul>
                </div>
              </div> -->
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> Cart <sup
                                            class="badge bg-danger"
                                            style="background-color: red; color: white;">{{ count((array) session('cart')) }}</sup></a>
                                </li>
                                <li class="nav-item dropdown">
                                    @if (session('name_user'))
                                    <div style="display: flex; align-items: center; justify-content: center; gap: 5%">
                                        {{-- <i class="fa-solid fa-user"></i> --}}
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ session('name_user') }}
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('cartinfo') }}">Order History</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('feedback') }}">Feedback</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                                        @else
                                            <a href="{{ url('login') }}"><i class="fa fa-lock"></i> Login</a>
                                        </div>
                                    </div>
                                @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                                <li><a href="{{ url('blog') }}" class="">Blog</a></li>
                                <li><a href="{{ url('contact') }}" class="">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Contact <strong>Us</strong></h2>
                    <div id="gmap" class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2826466528713!2d106.66227877485723!3d10.789650689359918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f631cb7c4b7%3A0xd152d83450f68d15!2sFPT%20Aptech!5e0!3m2!1svi!2s!4v1703938883268!5m2!1svi!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="{{url('feedback')}}" method="post">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" value="{{session('name_user')}}" placeholder="Name" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" value="{{session('email_user')}}" placeholder="Email" />
                            </div>
                            <div class="form-group col-md-12">
                                <div class="text-danger" style="margin-left: 2rem">

                                    {{session('error1')}}
                                </div>
                                <input type="text" id="myInput" name="subject" class="form-control" required="required" placeholder="Subject" />
                            </div>
                            <div class="form-group col-md-12">
                                <div class="text-danger" style="margin-left: 2rem">
                                    {{session('error')}}
                                </div>
                                <textarea name="feedback" id="myInput" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>


                        <address>
                            <p>E|Flower Inc.</p>
                            <p>590 Cách Mạng Tháng 8, Phường 11, Quận 3, Thành phố Hồ Chí Minh 700000, Việt Nam</p>
                            <p>Việt Nam</p>
                            <p>Mobile: +0963403800 </p>
                            <p>Email:aptech.fpt@fe.edu.vn </p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Social Networking</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-page-->

    <footer id="footer">
        <!--Footer-->


        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quick E-flower</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">planter</a></li>
                                <li><a href="#">Home Decor</a></li>
                                <li><a href="#">plant care</a></li>
                                <li><a href="#">kitchen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About E-flower</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About E-flower</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-arrow-circle-o-right"></i>
                                </button>
                                <p>
                                    Get the most recent updates from <br />our site and be
                                    updated your self...
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">
                        Copyright © 2023 E-SHOP FLOWER Inc. All rights reserved.
                    </p>
                    <p class="pull-right">
                        Designed by
                        <span><a target="_blank" href="#">GROUP 3</a></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
<script>

    $(document).ready(function () {
        // Handle form submission
        $('#main-contact-form').submit(function (event) {
            // Trim spaces from input values
            $('input[type="text"], input[type="email"], textarea', this).each(function () {
                $(this).val($.trim($(this).val()));
            });

            // Check for leading spaces
            if ($(this).find('input[type="text"], input[type="email"], textarea').filter(function () {
                return /^(\s+)/.test($(this).val());
            }).length > 0) {
                // Disable the submit button if leading spaces are found
                alert('Leading spaces are not allowed.');
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script>
</html>
