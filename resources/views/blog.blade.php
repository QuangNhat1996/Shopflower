<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog | E-flower</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
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
                    <div class="main__header mainheader__top">
                        <div class="header__top">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="images/home/logo4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="header__top__right">
                            <ul class="nav">
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

                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            @foreach ($category as $cate)
                                <!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="{{ url('view-categories/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    <div class="row">
                        @foreach ($blog as $item)
                            {{-- <div class="blog-post-area md-6"> --}}
                            <div class="col-md-6">
                                <div class="single-blog-post">
                                    <div class="blog__title">
                                        @if (strlen($item->title) > 10)
                                            <h3 value="{{ $item->id }}">

                                                {{ substr($item->title, 0, 50) }}
                                                {{-- <span value="{{ $item->id }}"
                                                class="more">{{ substr($item->title, 0, 20) }}</span> --}}
                                            </h3>
                                        @endif

                                    </div>





                                    <div class="post-meta">
                                        <ul>
                                            <li><i class="fa fa-user"></i> :{{ $item->name }}</li>
                                            <li><i class="fa fa-clock-o"></i> :{{ $item->time }}</li>
                                            <li><i class="fa fa-calendar"></i>:{{ $item->date }}</li>
                                        </ul>

                                    </div>
                                    <div class="blog__img">
                                        <a href="">


                                            <img src="uploads/{{ $item->image }}" alt=""
                                                class="blog__imga" />
                                        </a>
                                    </div>
                                    <div class="blog__content">
                                        <p>
                                            @if (strlen($item->content) > 100)
                                                <span class="dots"
                                                    value="{{ $item->title }}">{{ substr($item->content, 0, 120) }}...</span>
                                                {{-- <span value="{{ $item->title }}" class="more"
                                                    style="display:  none;">{{ substr($item->content, 0, 100) }}</span> --}}
                                            @endif
                                        </p>

                                    </div>
                                    <a href="blogdetail/{{ $item->id }}"><button
                                            class="btn btn-primary btn-small myBtn" value="{{ $item->title }}">Read
                                            more</button></a>
                                </div>
                            </div>
                        @endforeach
                    </div>



                    <div class="pagination-area">
                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

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
    <script src="js/blog.js"></script>
    <script type="text/javascript">
        // Hide the extra content initially:
        // function myFunction() {
        //     var dots = document.getElementById("dots");
        //     var moreText = document.getElementById("more");
        //     var btnText = document.getElementById("myBtn");

        //     if (dots.style.display === "none") {
        //         dots.style.display = "block";
        //         btnText.innerHTML = "Read more";
        //         moreText.style.display = "none";
        //     } else {
        //         dots.style.display = "none";
        //         btnText.innerHTML = "Read less";
        //         moreText.style.display = "block";
        //     }
        // }
    </script>
    {{-- <script>
        function myFunction() {

            var dots = document.getElementById("dots");
            var moreText = document.querySelectorAll(".more");
            var btnText = document.querySelectorAll(".myBtn");
            console.log(btnText)
            btnText.forEach(element_btntext => {
                element_btntext.addEventListener('click', function() {
                    console.log(element_btntext)
                    moreText.forEach(element_moretext => {
                        if (element_btntext.getAttribute('value') == element_moretext.getAttribute(
                                'value')) {
                            if (dots.style.display === "none") {
                                dots.style.display = "block";
                                element_btntext.innerHTML = "Read more";
                                element_moretext.style.display = "none";
                            } else {
                                dots.style.display = "none";
                                element_btntext.innerHTML = "Read less";
                                element_moretext.style.display = "block";
                            }
                        }
                    })
                })
            })
            // if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText.innerHTML = "Read more";
            //     moreText.style.display = "none";
            // } else {
            //     dots.style.display = "none";
            //     btnText.innerHTML = "Read less";
            //     moreText.style.display = "block";
            // }
        }
    </script> --}}
</body>

</html>
