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
                        // idEvento: $('table').attr('id'),
                        idEvento: '{{$idEvento}}', //possibili problemi di sicurezza, vedere pure il metodo a event controller riga 74
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
                    {{--<form action="#">--}}
                        <div class="table-content table-responsive">
                            @foreach($events as $event)
                                {{$event->titolo}}
                                {{--<table id="{{$event->id}}">--}}
                                <table>
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

                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
