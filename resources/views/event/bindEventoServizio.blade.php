@extends('layouts.app')

@section('script')
    <!-- ajax jquery-->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <!--chiamata ajax-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ajaxAssociate').on('click',function() {
                console.log($(this).attr('id'));  //-->this will alert name of checked checkbox.
                $.ajax({
                    type:'get',
                    url:'/associaServizi',
                    data: {"_token ": "{{csrf_token()}}",
                        idEvento: $('table').attr('id'),
                        idServizio: $(this).attr('id')
                    },
                    success:function(data){
                        console.log(data);
                        alert(data);
                    },
                    error: function() {
                        console.log('errore');
                    },
                    complete: function() {
                        console.log('chiamata ajax completata');
                        alert('chiamata ajax completata');
                    }
                });
            });
        });
    </script>
@endsection

@section('content')
    <!-- heading-banner start -->
    <div class="heading-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li class="active">Associa servizi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- heading-banner end -->
    <!-- cart-main-area start -->
    <div class="cart-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            @foreach($events as $event)
                                {{$event->titolo}}
                                <table id="{{$event->id}}">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">
                                            Image
                                        </th>
                                        <th class="product-name">
                                            Product
                                        </th>
                                        <th class="product-price">
                                            Price
                                        </th>
                                        <th class="product-quantity">
                                            Quantity
                                        </th>
                                        <th class="product-subtotal">
                                            Total
                                        </th>
                                        <th class="product-remove">
                                            Remove
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="img/cart/cart.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">{{$service->servizio_evento}}</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">£165.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <input type="number" value="1" />
                                        </td>
                                        <td class="product-subtotal">
                                            $165.00
                                        </td>
                                        <td class="product-remove">
                                            {{--mettere bottone che cambia: associa rimuovi--}}
                                            <a href="#" class="ajaxAssociate" id="{{$service->id}}" name='{{$service->id}}'><i class="fa fa-times"></i></a>
                                            <input type="checkbox" id="{{$service->id}}" value='{{$service->id}}' name='{{$service->id}}' class="ajaxAssociate"/>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <input type="submit" value="Update Cart" />
                                    <a href="#">Continue Shopping</a>
                                </div>
                                <div class="coupon">
                                    <h3>
                                        Coupon</h3>
                                    <p>
                                        Enter your coupon code if you have one.</p>
                                    <input type="text" placeholder="Coupon code" />
                                    <input type="submit" value="Apply Coupon" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>
                                        Cart Totals</h2>
                                    <table>
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                Subtotal
                                            </th>
                                            <td>
                                                <span class="amount">$215.00</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>
                                                Shipping
                                            </th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            Flat Rate: <span class="amount">$7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            Free Shipping
                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                                <p>
                                                    <a class="shipping-calculator-button" href="#">Calculate Shipping</a></p>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>
                                                Total
                                            </th>
                                            <td>
                                                <strong><span class="amount">$215.00</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->
@endsection
