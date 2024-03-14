<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Forgot Password</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <link rel="shortcut icon" href="images/ico/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png" />
</head><!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo4.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}"><i class="fa fa-lock"></i> Login</a>
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
                </div>
            </div>
            <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2 style="text-align: center;">FORGOT YOUR PASSWORD</h2>

                        <form method="POST" action="{{ url('/checkforgot') }}">
                            @csrf
                            {{-- NHẬP EMAIL --}}
                            <input type="email" name="email" placeholder="Email" required/>

                            {{-- NHẬP CÂU HỎI BẢO MẬT --}}
                            <select name="security_question" id="security_question" style="margin-bottom: 8px">
                                <option value="">--- Select Option ---</option>
                                <option value="question1">What was the name of your elementary school?</option>
                                <option value="question2">What is your father name?</option>
                                <option value="question3">In what city were you born?</option>
                                <option value="question4">What is the name of your favorite pet?</option>
                                <option value="question5">What is your best friend's name?</option>
                            </select>

                            <input type="text" id="security_answer" name="securtiy_answer" placeholder="Input your answer" required >
                            @if(session('err2'))
                                <div class="alert alert-danger" style="color:rgb(220, 30, 1);">
                                {{session('err2')}}
                                </div>
                            @elseif(session('err3'))
                                <div class="alert alert-danger" style="color:rgb(220, 30, 1);">
                                    {{session('err3')}}
                                </div>
                            @elseif(session('err4'))
                                <div class="alert alert-danger" style="color:rgb(220, 30, 1);">
                                    {{session('err4')}}
                                </div>
                            @endif
                            <input type="submit" class="btn btn-primary my-2" style="color: #fff" value="SUBMIT"/>
                        </form>
                    </div>
                    <!--/login form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->

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
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script>
        // Function Register
        function registerForm() {
            if (validateFirstName() && validateLastName() && validateEmail() && validatePassword() && validateRetypePassword() && validateSecurityAnswer()) {
               return true;
            } return false;
        }

        // Validate First Name
        function validateFirstName() {
            var first_name = document.getElementById("first_name").value;
            var pattern = /^[a-zA-Z\s]+$/;
            var resultElement = document.getElementById("errFirstName");

            if (first_name.length >= 2 && pattern.test(first_name)) {
               resultElement.innerHTML = "";
               return true;
            } else {
               resultElement.innerHTML = "Name needs to be at least 2 characters and cannot contain numbers or special characters!";
               return false;
            }
        }

        // Validate Last Name
        function validateLastName() {
            var last_name = document.getElementById("last_name").value;
            var pattern = /^[a-zA-Z\s]+$/;
            var resultElement = document.getElementById("errLastName");

            if (last_name.length >= 2 && pattern.test(last_name)) {
               resultElement.innerHTML = "";
               return true;
            } else {
               resultElement.innerHTML = "Name needs to be at least 2 characters and cannot contain numbers or special characters!";
               return false;
            }
        }

        // Validate Email
        function validateEmail() {
            var email = document.getElementById('user_email').value;
            var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;
            var resultElement = document.getElementById("errEmail");

            if (pattern.test(email)) {
               resultElement.innerHTML = "";
               return true;
            } else {
               resultElement.innerHTML = "Invalid Email!";
               return false;
            }
        }

        // Validate Password
        function validatePassword() {
            var password = document.getElementById("user_password").value;
            var uppercaseRegex = /[A-Z]/;
            var resultElement = document.getElementById("errPassword");

            if (password.length >= 8 && uppercaseRegex.test(password)) {
               resultElement.innerHTML = "";
               return true;
            } else {
               resultElement.innerHTML = "Password must at least 8 characters and at least 1 capital letter!";
               return false;
            }
        }

        // Validate Reconfirm Password
        function validateRetypePassword() {
            var password = document.getElementById("user_password").value;
            var retypePassword = document.getElementById("user_retype_password").value;
            var passwordMatchElement = document.getElementById("errReconfirmPassword");
            if (password === retypePassword) {
                passwordMatchElement.innerHTML = "";
                return true;
            } else {
                passwordMatchElement.innerHTML = "Password Incorrect!";
                return false;
            }
        }

        // Validate Security Answer
        function validateSecurityAnswer() {
            var question = document.getElementById("security_question");
            var answer = document.getElementById("security_answer");
            if (answer.value.trim().length <= 30 && answer.value.trim().length > 0) {
                return true;
            } return false;
        }
    </script>
</body>

</html>
