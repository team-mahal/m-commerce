@extends('layouts.app')

@section('content')
<br><br>
    <div class="container">

        <div id="content-wrapper">

            <section id="main" class="bigcartapppend">
                <div class="cart-grid row">
    <!-- Left Block: cart product informations & shpping -->
    <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
            <div class="card-block">
                <h1 class="h1">Shopping Cart</h1>
            </div>
            <hr>

            <div class="cart-overview js-cart">
                <ul class="cart-items">
                    @foreach($wishlist as $row)
                        <li class="cart-item">
                            <div class="product-line-grid">
                                <!--  product left content: image-->
                                <div class="product-line-grid-left col-md-3 col-xs-4">
                                    <span class="product-image media-middle">
                                        @if($row->options['image'])
                                            <img class="img-responsive" src="{{ asset('uploads/products/'.$row->options['image']) }}" alt="Quisque at orci gravid,">
                                        @else
                                            <img class="img-responsive" src="{{ asset('/assets/download.png') }}" alt="Quisque at orci gravid,">
                                        @endif
                                    </span>
                                </div>

                                <!--  product left body: description -->
                                <div class="product-line-grid-body col-md-4 col-xs-8">
                                    <div class="product-line-info">
                                        <a class="label" href="">
                                           {{ $row->name }}
                                        </a>
                                    </div>

                                    <div class="product-line-info">
                                        <span class="value">৳ {{ $row->price }}</span>
                                    </div>

                                    <br>

                                </div>

                                <!--  product left body: description -->
                                <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-2 col-xs-2 text-xs-right">
                                            <div class="cart-line-product-actions" style="cursor:pointer;">
                                                <a class="remove-from-cart" href="removewishlive/{{ $row->rowId }}" rel="nofollow">
                                                    <i class="material-icons pull-xs-left">delete</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

        <a class="label" href="{{ asset('/') }}">
            <i class="material-icons">chevron_left</i>Continue shopping
        </a>

        <!-- shipping informations -->
        <div>

        </div>
    </div>

    <!-- Right Block: cart subtotal & cart total -->
    <div class="cart-grid-right col-xs-12 col-lg-4">

        <div id="block-reassurance">
            <ul>
                <li>
                    <div class="block-reassurance-item">
                        <img src="https://demo.fieldthemes.com/ps_medicine/home2/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with module Customer reassurance)">
                        <span class="h6">Security policy (edit with module Customer reassurance)</span>
                    </div>
                </li>
                <li>
                    <div class="block-reassurance-item">
                        <img src="https://demo.fieldthemes.com/ps_medicine/home2/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with module Customer reassurance)">
                        <span class="h6">Delivery policy (edit with module Customer reassurance)</span>
                    </div>
                </li>
                <li>
                    <div class="block-reassurance-item">
                        <img src="https://demo.fieldthemes.com/ps_medicine/home2/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with module Customer reassurance)">
                        <span class="h6">Return policy (edit with module Customer reassurance)</span>
                    </div>
                </li>
            </ul>
        </div>

    </div>

</div>
            </section>

        </div>

    </div>
@endsection