<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop | E-flower</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

    <link rel="shortcut icon" href="images/ico/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}


</head><!--/head-->
<header id="header">
    <!--header-->
    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ url('/') }}"><img src="images/home/logo4.png" alt="" /></a>
                    </div>
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
                            <li><a href="{{ url('/') }}" class="">Home</a></li>
                            <li><a href="{{ url('blog') }}" class="">Blog</a></li>
                            <li><a href="{{ url('contact') }}" class="">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" id="search" oninput="handleInput(event)" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>-FLOWER</h1>
                                <h2>E-Flower</h2>
                                <p>
                                    home banner 1
                                </p>
                                <button type="button" class="btn btn-default get">
                                    Get it now
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/banner1.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/banner1.jpg" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-FLOWER</h1>
                                <h2>E-Flower</h2>
                                <p>
                                    home banner 2
                                </p>
                                <button type="button" class="btn btn-default get">
                                    Get it now
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/banner2.png" class="girl img-responsive" alt="" />
                                <img src="images/home/banner2.png" class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-FLOWER</h1>
                                <h2>laravel </h2>
                                <p>
                                    home banner 3
                                </p>
                                <button type="button" class="btn btn-default get">
                                    Get it now
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/banner3.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/banner3.jpg" class="pricing" alt="" />
                            </div>
                        </div>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<body>
    <section id="advertisement">
        <div class="container">
            <img src="images/shop/advertisement.jpg" alt="" />
        </div>
    </section>

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

                {{-- PRODUCT CHRISTMAS --}}


                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <h2 class="title text-center" style="z-index:-1 ">Christmas Flower</h2>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9" style=" margin-bottom: 2rem;">
                    <div class="col-sm-3">
                        <input type="text" oninput="searchproduct()" id="search_giangsinh" class="form-control"
                            placeholder="name">
                    </div>
                    <select class="col-sm-3" name="sort_by" id="sort_by" oninput="searchproduct()">
                        <option value="asc">Price: Low to High</option>
                        <option value="desc">Price: High to Low</option>
                        {{-- <option value="new">Product: Latest</option>
                        <option value="old">Product: Oldest</option> --}}
                    </select>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <div id="dataResult" class="features_items">
                        <!--features_items-->
                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number">
                        </ul>
                    </div>
                    <!--features_items-->
                </div>

                {{-- PRODUCT WEDDING --}}
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <h2 class="title text-center" style="z-index:-1">Wedding Flower</h2>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9" style=" margin-bottom: 2rem;">
                    <div class="col-sm-3">
                        <input type="text" oninput="searchproductwedding()" id="search_wedding"
                            class="form-control" placeholder="name">
                    </div>
                    <select class="col-sm-3" name="sort_by" id="sort_wedding" oninput="searchproductwedding()">
                        <option value="asc">Price: Low to High</option>
                        <option value="desc">Price: High to Low</option>
                        {{-- <option value="new">Product: Latest</option>
                        <option value="old">Product: Oldest</option> --}}
                    </select>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <div id="dataResult_wedding" class="features_items">
                        <!--features_items-->
                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number_wedding">
                        </ul>
                    </div>
                    <!--features_items-->
                </div>

                {{-- PRODUCT SPECIAL --}}

                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <h2 class="title text-center" style="z-index:-1">Special Flower</h2>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9" style=" margin-bottom: 2rem;">
                    <div class="col-sm-3">
                        <input type="text" oninput="searchproductspecial()" id="search_special"
                            class="form-control" placeholder="name">
                    </div>
                    <select class="col-sm-3" name="sort_by" id="sort_special" oninput="searchproductspecial()">
                        <option value="asc">Price: Low to High</option>
                        <option value="desc">Price: High to Low</option>
                        {{-- <option value="new">Product: Latest</option>
                        <option value="old">Product: Oldest</option> --}}
                    </select>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <div id="dataResult_special" class="features_items">
                        <!--features_items-->
                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number_special">
                        </ul>
                    </div>
                    <!--features_items-->
                </div>

                {{-- PRODUCT BIRTHDAY --}}
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <h2 class="title text-center" style="z-index:-1">Birthday Flower</h2>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9" style=" margin-bottom: 2rem;">
                    <div class="col-sm-3">
                        <input type="text" oninput="searchproductsinhnhat()" id="search_sinhnhat"
                            class="form-control" placeholder="name">
                    </div>
                    <select class="col-sm-3" name="sort_by" id="sort_sinhnhat" oninput="searchproductsinhnhat()">
                        <option value="asc">Price: Low to High</option>
                        <option value="desc">Price: High to Low</option>
                        {{-- <option value="new">Product: Latest</option>
                        <option value="old">Product: Oldest</option> --}}
                    </select>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <div id="dataResult_sinhnhat" class="features_items">
                        <!--features_items-->
                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number_sinhnhat">
                        </ul>
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>
    <section id="digital">
        <div class="contarner">
            <div class="digital__content">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/tMYQR8c29G4?si=P39wKc7j3a95Z9PZ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        window.addEventListener("load", function() {
            searchproduct();
            searchproductwedding();
            searchproductspecial();
            searchproductsinhnhat();
            localStorage.setItem('phone', "{{ session('phone') }}");
            localStorage.setItem('name_user', "{{ session('name_user') }}")
            localStorage.setItem('email_user', "{{ session('email_user') }}")
            console.log("{{ session('phone') }}");
        });

        function handleInput(event) {
            const value = event.target.value;
            searchproduct(event);
            searchproductwedding(event);
            searchproductspecial(event);
            searchproductsinhnhat(event);
        }

        function searchproduct(value) {
            var search = document.getElementById('search').value;
            let type_product = "C01"
            let sort_by = document.getElementById('sort_by').value
            var search_giangsinh = document.getElementById('search_giangsinh').value;

            $.ajax({
                type: 'GET',
                url: "{{ route('search_product') }}",
                data: {
                    search: search,
                    type_product: type_product,
                    search_giangsinh: search_giangsinh,
                    sort_by: sort_by
                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 6; // Số sản phẩm trên mỗi trang.
                        let currentPage = 1;

                        function displayProducts(page) {
                            const startIndex = (page - 1) * itemsPerPage;
                            const endIndex = startIndex + itemsPerPage;
                            const displayedProducts = products.slice(startIndex, endIndex);
                            $("#dataResult").html('');
                            displayedProducts.forEach(kq => {
                                const formattedPrice = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'VND',
                                }).format(kq.product_price).replace('₫', '');

                                $("#dataResult").append(`
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="uploads/${kq.image}" alt="" />
                                                <h2>${formattedPrice}$</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('user/cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }

                        function setNumber() {
                            const totalPages = Math.ceil(products.length / itemsPerPage);

                            const paginationDiv = document.getElementById('number');
                            paginationDiv.innerHTML = '';

                            for (let i = 1; i <= totalPages; i++) {
                                var listItem = document.createElement('li');

                                // Create a new pageLink element
                                const pageLink = document.createElement('a');

                                // Set the href attribute for the pageLink element
                                // pageLink.href = '#';

                                // Set the text content for the pageLink element
                                pageLink.textContent = i;

                                // Append the pageLink element to the list item
                                listItem.appendChild(pageLink);

                                listItem.addEventListener('click', () => {
                                    currentPage = i;
                                    displayProducts(currentPage);
                                    setNumber();
                                });

                                if (i === currentPage) {
                                    pageLink.classList.add('active');
                                }

                                paginationDiv.appendChild(listItem);
                            }
                        }
                        setNumber();
                        displayProducts(currentPage);

                    }
                    if (kq == "") {
                        $("#dataResult").html("");
                        $("#number").html("");
                    }

                }
            });

        };

        function searchproductwedding(value) {
            var search = document.getElementById('search').value;
            let type_product = "C02"
            let sort_by = document.getElementById('sort_wedding').value
            var search_wedding = document.getElementById('search_wedding').value;


            $.ajax({
                type: 'GET',
                url: "{{ route('search_product') }}",
                data: {
                    search: search,
                    type_product: type_product,
                    search_wedding: search_wedding,
                    sort_by: sort_by
                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 6; // Số sản phẩm trên mỗi trang.
                        let currentPage = 1;

                        function displayProducts(page) {
                            const startIndex = (page - 1) * itemsPerPage;
                            const endIndex = startIndex + itemsPerPage;
                            const displayedProducts = products.slice(startIndex, endIndex);
                            $("#dataResult_wedding").html('');
                            displayedProducts.forEach(kq => {
                                const formattedPrice = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'VND',
                                }).format(kq.product_price).replace('₫', '');

                                $("#dataResult_wedding").append(`
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="uploads/${kq.image}" alt="" />
                                                <h2>${formattedPrice}$</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('user/cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `)
                            })
                        }

                        function setNumber() {
                            const totalPages = Math.ceil(products.length / itemsPerPage);

                            const paginationDiv = document.getElementById('number_wedding');
                            paginationDiv.innerHTML = '';

                            for (let i = 1; i <= totalPages; i++) {
                                var listItem = document.createElement('li');

                                // Create a new pageLink element
                                const pageLink = document.createElement('a');

                                // Set the href attribute for the pageLink element
                                // pageLink.href = '#';

                                // Set the text content for the pageLink element
                                pageLink.textContent = i;

                                // Append the pageLink element to the list item
                                listItem.appendChild(pageLink);

                                listItem.addEventListener('click', () => {
                                    currentPage = i;
                                    displayProducts(currentPage);
                                    setNumber();
                                });

                                if (i === currentPage) {
                                    pageLink.classList.add('active');
                                }

                                paginationDiv.appendChild(listItem);
                            }
                        }
                        setNumber();
                        displayProducts(currentPage);

                    }
                    if (kq == "") {
                        $("#dataResult_wedding").html("");
                        $("#number_wedding").html("");
                    }

                }
            });

        };

        function searchproductspecial(value) {
            var search = document.getElementById('search').value;
            let type_product = "C03"
            var search_special = document.getElementById('search_special').value;
            let sort_by = document.getElementById('sort_special').value

            $.ajax({
                type: 'GET',
                url: "{{ route('search_product') }}",
                data: {
                    search: search,
                    type_product: type_product,
                    search_special: search_special,
                    sort_by: sort_by

                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 6; // Số sản phẩm trên mỗi trang.
                        let currentPage = 1;

                        function displayProducts(page) {
                            const startIndex = (page - 1) * itemsPerPage;
                            const endIndex = startIndex + itemsPerPage;
                            const displayedProducts = products.slice(startIndex, endIndex);
                            $("#dataResult_special").html('');
                            displayedProducts.forEach(kq => {
                                const formattedPrice = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'VND',
                                }).format(kq.product_price).replace('₫', '');

                                $("#dataResult_special").append(`
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">

                                            <div class="productinfo text-center">
                                                <img src="uploads/${kq.image}" alt="" />
                                                <h2>${formattedPrice}$</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('user/cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }

                        function setNumber() {
                            const totalPages = Math.ceil(products.length / itemsPerPage);

                            const paginationDiv = document.getElementById('number_special');
                            paginationDiv.innerHTML = '';

                            for (let i = 1; i <= totalPages; i++) {
                                var listItem = document.createElement('li');

                                // Create a new pageLink element
                                const pageLink = document.createElement('a');

                                // Set the href attribute for the pageLink element
                                // pageLink.href = '#';

                                // Set the text content for the pageLink element
                                pageLink.textContent = i;

                                // Append the pageLink element to the list item
                                listItem.appendChild(pageLink);

                                listItem.addEventListener('click', () => {
                                    currentPage = i;
                                    displayProducts(currentPage);
                                    setNumber();
                                });

                                if (i === currentPage) {
                                    pageLink.classList.add('active');
                                }

                                paginationDiv.appendChild(listItem);
                            }
                        }
                        setNumber();
                        displayProducts(currentPage);

                    }
                    if (kq == "") {
                        $("#dataResult_special").html("");
                        $("#number_special").html("");
                    }

                }
            });

        };

        function searchproductsinhnhat(value) {
            var search = document.getElementById('search').value;
            let type_product = "C04"
            var search_sinhnhat = document.getElementById('search_sinhnhat').value;
            let sort_by = document.getElementById('sort_sinhnhat').value

            $.ajax({
                type: 'GET',
                url: "{{ route('search_product') }}",
                data: {
                    search: search,
                    type_product: type_product,
                    search_sinhnhat: search_sinhnhat,
                    sort_by: sort_by
                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 6; // Số sản phẩm trên mỗi trang.
                        let currentPage = 1;

                        function displayProducts(page) {
                            const startIndex = (page - 1) * itemsPerPage;
                            const endIndex = startIndex + itemsPerPage;
                            const displayedProducts = products.slice(startIndex, endIndex);
                            $("#dataResult_sinhnhat").html('');
                            displayedProducts.forEach(kq => {
                                const formattedPrice = new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'VND',
                                }).format(kq.product_price).replace('₫', '');

                                $("#dataResult_sinhnhat").append(`
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                            <div  style="overflow: hidden; width: 100% ; height: 30rem;">
                                                <img src="uploads/${kq.image}" alt="" />
                                            </div>
                                                <h2>${formattedPrice}$</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('user/cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }

                        function setNumber() {
                            const totalPages = Math.ceil(products.length / itemsPerPage);

                            const paginationDiv = document.getElementById('number_sinhnhat');
                            paginationDiv.innerHTML = '';

                            for (let i = 1; i <= totalPages; i++) {
                                var listItem = document.createElement('li');

                                // Create a new pageLink element
                                const pageLink = document.createElement('a');

                                // Set the href attribute for the pageLink element
                                // pageLink.href = '#';

                                // Set the text content for the pageLink element
                                pageLink.textContent = i;

                                // Append the pageLink element to the list item
                                listItem.appendChild(pageLink);

                                listItem.addEventListener('click', () => {
                                    currentPage = i;
                                    displayProducts(currentPage);
                                    setNumber();
                                });

                                if (i === currentPage) {
                                    pageLink.classList.add('active');
                                }

                                paginationDiv.appendChild(listItem);
                            }
                        }
                        setNumber();
                        displayProducts(currentPage);

                    }
                    if (kq == "") {
                        $("#dataResult_sinhnhat").html("");
                        $("#number_sinhnhat").html("");
                    }
                }
            });

        };
    </script>
</body>

</html>
