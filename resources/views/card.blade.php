<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cart | E-flower</title>
    <!-- link bootrap 4 -->
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    /> -->
    <!-- end link bootrap 4  -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/card.css') }}" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="images/ico/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


</head>
<!--/head-->
<style>
    /* CSS để thu nhỏ lại thẻ input number */
    input[type="number"] {
        width: 50px; /* Điều chỉnh chiều rộng theo ý muốn */
        height: 30px; /* Điều chỉnh chiều cao theo ý muốn */
        padding: 5px; /* Điều chỉnh độ dày phần padding nếu cần */
        /* Các thuộc tính CSS khác nếu cần thiết */
    }
</style>
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
                                    <a href="{{ url('/cart') }}"><i class="fa fa-shopping-cart"></i> Cart <sup class="badge bg-danger" style="background-color: red; color: white;">{{ count((array) session('cart')) }}</sup></a>
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
                </div>
            </div>
            <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-10 mx-auto">
                <div class="container">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>CHECK</th>
                                <th>PRODUCT ID</th>
                                <th>PRODUCT NAME</th>
                                <th>IMAGE</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $totalPrice = 0 @endphp
                            @php $totalQuantity = 0 @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $item)
                                    @php $totalPrice += $item['price'] * $item['quantity'] @endphp
                                    @php $totalQuantity += $item['quantity'] @endphp
                                    <tr data-id="{{ $item['product_id'] }}">
                                        <td>
                                            <input type="checkbox" data-value="{{ $item['product_id'] }}" checked class="cart-checkbox" data-price="{{ $item['price'] }}" data-quantity="{{ $item['quantity'] }}">
                                        </td>
                                        <td>{{ $item['product_id'] }}</td>
                                        <td>{{ $item['product_name'] }}</td>
                                        <td><img style="width:50px;height:50px;" src="uploads/{{ $item['photo'] }}" alt="">
                                        </td>
                                        <td>{{ number_format($item['price'])  }}</td>
                                        <td>
                                            <input type="number" value="{{ $item['quantity'] }}" class="form-control quantity cart_update" min="1" />
                                        </td>
                                        <td class="actions" data-th="">
                                            <button type="submit" class="btn btn-danger btn-sm cart_remove" data-id="{{ $item['product_id'] }}"><i class="fa fa-trash-o"></i> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="10" style="text-align:right;">
                                    <h4>Total Quantity: <span id="tongsl">{{$totalQuantity}}</span></h4>
                                    <h4>Total Price: <span id="dongia">{{number_format($totalPrice)}}</span> $</h4>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td colspan="10" style="text-align: right;">
                                    <form action="/session" method="POST">
                                        <a href="{{url ('/')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                    </form>
                                </td>
                            </tr> --}}
                        </tfoot>
                    </table>
                </div>
            </div>
            <form id="shippingForm" action="{{url('session')}}" method="POST">
                <h4 class="text-center">INFORMATION SHIPPING</h4>
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input value="" type="text"  class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input value="{{session('email')}}"  type="email" id="email" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="tel" class="form-control" name="address" id="address" placeholder="Enter your address">
                </div>
                <a href="{{url ('/')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-success" type="submit" id="checkout-live-button" disabled><i class="fa fa-money"></i> Checkout</button>
            </form>
            <table class="table table-hover table-striped">
                <tfoot>
                    <tr>
                        <td colspan="10" style="text-align: right;">
                            {{-- <form action="{{url('checkout')}}" method="POST">

                            </form> --}}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
      </section>
    </section>
    <!--/#cart_items-->

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

    <!-- js bootrap 4  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- end js bootstrap 4 -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
       document.getElementById("name").value = localStorage.getItem('name_user');
       document.getElementById("phoneNumber").value = localStorage.getItem('phone');
       document.getElementById("email").value = localStorage.getItem('email_user');
    </script>
    {{-- SHIPPING FORM --}}
    <script>
        $(document).ready(function () {
            // Function to check the form completion status
            function checkFormCompletion() {
                var isFormComplete = true;
                // Check each input field
                $('#shippingForm input').not('[type="hidden"]').each(function () {
                    if ($(this).val() === '') {
                        isFormComplete = false;
                        return false; // Break the loop if any field is empty
                    }
                });
                // Enable or disable the Checkout button based on the completion status
                $('#checkout-live-button').prop('disabled', !isFormComplete);
            }
            // Attach the checkFormCompletion function to the input fields' change event
            $('#shippingForm input').not('[type="hidden"]').on('input', checkFormCompletion);
        });
    </script>

    {{-- SCRIPT CHECKBOX CART --}}
    <script>
        $(document).ready(function () {
            updateTotals();
            $('.cart-checkbox').change(function () {
                updateTotals();
            });

            function updateTotals() {
                var totalCheckedPrice = 0;
                var totalCheckedQuantity = 0;
                var paymentItems =[];
                var cartItems = @json(session('cart'));
                cartItems=  Object.entries(cartItems)

                // Lấy dữ liệu từ session('payment') hoặc sử dụng một mảng trống nếu không có dữ liệu
                // console.log(cartItems)
                // console.log('adadaad')
                $('.cart-checkbox:checked').each(function () {
                    var self = this;
                    cartItems.forEach(function(element) {
                        if (element[0] == $(self).data('value')) {
                            console.log($(self).data('value'))
                            paymentItems.push(element);
                        }
                    })

                $.ajax({
                    url: '{{ route('payment_cart') }}',
                    method: "get",
                    data: {
                        paymentItems: paymentItems
                    },
                    success: function (data) {
                        console.log(data)
                    }
                });
                    var price = parseInt($(this).data('price'));
                    var quantity = parseInt($(this).data('quantity'));

                    totalCheckedPrice += price * quantity;
                    totalCheckedQuantity += quantity;
                });

                // Hiển thị hoặc sử dụng totalCheckedPrice và totalCheckedQuantity theo cách bạn muốn trong ứng dụng của bạn
                // console.log('Tổng giá đã chọn: ' + totalCheckedPrice);
                $('#tongsl').text(totalCheckedQuantity);
                // console.log('Tổng số lượng đã chọn: ' + totalCheckedQuantity);
                $('#dongia').text(formatNumber(totalCheckedPrice));

                function formatNumber(n){
                    n += '';
                    x = n.split('.');
                    x1 = x[0];
                    x2 = x.length > 1 ? '.' + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + ',' + '$2');
                    }
                    return x1 + x2;
                }
            }
        });
    </script>

    {{-- SCRIPT UPDATE CART --}}
    <script>
        $(".cart_update").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                window.location.reload();
                }
            });
        });
    </script>

    {{-- SCRIPT DELETE CART --}}
    <script>
        $(".cart_remove").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>

</body>


</html>
