<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | E-Flower</title>
    <!-- fantacy css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- end fatacy css  -->
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
                            <a href="index.html"><img src="{{ 'resources/frondend/images/home/logo4.png' }}"alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart <sup class="badge bg-danger" style="background-color: red; color: white;">{{ count((array) session('cart')) }}</sup></a>
                                    
                                </li>
                                <li>
                                    <a href="{{ url('login') }}"><i class="fa fa-lock"></i> Login</a>
                                </li>
                                <li id='thongTin_user'>
                                    @if (session('name_user'))
                                    <h1>Welcome: {{session('name_user') }}</h1>
                                    <p>Email: {{session('email_user') }}</p>
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
                                <li><a href="{{ url('product') }}" class="">Product</a></li>
                                <li><a href="{{ url('blog') }}" class="">Blog</a></li>
                                <li><a href="{{ url('contact') }}" class="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" id="search" oninput="handleInput(event)" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </header>
    <!--/header-->

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
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach ($categories as $cate )
                            <!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{url('view-categories/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="images/home/noel.png" alt="" />
                        </div>
                        <!--/shipping-->
                    </div>
                </div>

                <div class="col-sm-9 padding-right ">
                    <h2 class="title text-center">Christmas Flower</h2>
                    <div id="dataResult" class="features_items">
                        <!--features_items-->
                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number">
                        </ul>
                    </div>

                    <!--features_items-->
                </div>
                {{-- product Wedding --}}
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <h2 class="title text-center">Wedding Flower</h2>
                    <div id="dataResult_wedding" class="features_items">
                        <!--features_items-->
                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number_wedding">
                        </ul>
                    </div>

                    <!--features_items-->
                </div>
                {{-- product Special --}}
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <h2 class="title text-center">Special Flower</h2>
                    <div id="dataResult_special" class="features_items">
                        <!--features_items-->

                    </div>
                    <div class="page__number text-center">
                        <ul class="pagination " id="number_special">
                        </ul>
                    </div>


                    <!--features_items-->
                </div>
                {{-- product Birthday --}}
                <div class="col-sm-3"></div>
                <div class="col-sm-9 padding-right ">
                    <h2 class="title text-center">Birthday Flower</h2>
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
        <div class="title">
            <h2>digital experience</h2>
        </div>
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
    <!-- fantcy blog  -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!-- end fantacy  -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });

        window.addEventListener("load", function() {

            searchproduct();
            searchproductwedding();
            searchproductspecial();
            searchproductsinhnhat();

        });
        function handleInput(event){
            const value = event.target.value;
            searchproduct(event);
            searchproductwedding(event);
            searchproductspecial(event);
            searchproductsinhnhat(event);

        }

        function searchproduct(value) {
            var search = document.getElementById('search').value;
            let type_product = "C01"
            $.ajax({
                type: 'GET',
                url: "{{ route('search_productindex') }}",
                data: {
                    search: search,
                    type_product: type_product
                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 3; // Số sản phẩm trên mỗi trang.
                        let currentPage = 1;

                        function displayProducts(page) {
                            const startIndex = (page - 1) * itemsPerPage;
                            const endIndex = startIndex + itemsPerPage;
                            const displayedProducts = products.slice(startIndex, endIndex);

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
                                                <h2>${formattedPrice}VND</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }
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

            $.ajax({
                type: 'GET',
                url: "{{ route('search_productindex') }}",
                data: {
                    search: search,
                    type_product: type_product

                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 3; // Số sản phẩm trên mỗi trang.
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
                                                <h2>${formattedPrice}VND</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }
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

            $.ajax({
                type: 'GET',
                url: "{{ route('search_productindex') }}",
                data: {
                    search: search,
                    type_product: type_product

                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 3; // Số sản phẩm trên mỗi trang.
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
                                                <h2>${formattedPrice}VND</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }
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

            $.ajax({
                type: 'GET',
                url: "{{ route('search_productindex') }}",
                data: {
                    search: search,
                    type_product: type_product

                },
                success: function(data) {
                    console.log(data);

                    kq = data;
                    if (kq != "") {

                        const products = kq;
                        const itemsPerPage = 3; // Số sản phẩm trên mỗi trang.
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
                                                <img src="uploads/${kq.image}" alt="" />
                                                <h2>${formattedPrice}VND</h2>
                                                <p>${kq.product_name}</p>
                                                <a href="{{ url('detail/${kq.product_id}') }}" class="btn btn-default add-to-cart">View More</a>
                                                <a href="{{ url('cart/${kq.product_id}') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `)
                            })
                        }
                        // function setNumber() {
                        //     const totalPages = Math.ceil(products.length / itemsPerPage);

                        //     const paginationDiv = document.getElementById('number_sinhnhat');
                        //     paginationDiv.innerHTML = '';

                        //     for (let i = 1; i <= totalPages; i++) {
                        //         var listItem = document.createElement('li');

                        //         // Create a new pageLink element
                        //         const pageLink = document.createElement('a');

                        //         // Set the href attribute for the pageLink element
                        //         pageLink.href = '#';

                        //         // Set the text content for the pageLink element
                        //         pageLink.textContent = i;

                        //         // Append the pageLink element to the list item
                        //         listItem.appendChild(pageLink);

                        //         listItem.addEventListener('click', () => {
                        //             currentPage = i;
                        //             displayProducts(currentPage);
                        //             setNumber();
                        //         });

                        //         if (i === currentPage) {
                        //             pageLink.classList.add('active');
                        //         }

                        //         paginationDiv.appendChild(listItem);
                        //     }
                        // }
                        // setNumber();
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
