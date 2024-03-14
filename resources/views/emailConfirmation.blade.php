<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="invoice p-5">

                        <h5>Your order Confirmed!</h5>

                        <span class="font-weight-bold d-block mt-4">Hello, {{session('shipping_name')}}.</span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>

                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="py-2">
                                                <span class="d-block text-muted">Order Date</span>
                                                <span>{{session('date')}}</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="py-2">
                                                <span class="d-block text-muted">Order No</span>
                                                <span>{{session('order_no')}}</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="py-2">
                                                <span class="d-block text-muted">Shiping Address</span>
                                                <span>{{session('shipping_address')}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="product border-bottom table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    @foreach (session('TotalItem') as $item)
                                    <tr>
                                        <td width="100%">
                                            <span class="font-weight-bold">{{$item[1]}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="row d-flex justify-content-end">
                            <div class="col-md-5">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left">
                                                    <span class="font-weight-bold">Subtotal</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="font-weight-bold">{{number_format(session('total_price'))}}</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                        <span>Flower Team</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html>
