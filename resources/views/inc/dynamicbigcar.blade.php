 <div class="cart-grid row">
    <!-- Left Block: cart product informations & shpping -->
    <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
            <div class="card-block">
                <h1 class="h1">Shopping Cart</h1>
            </div>
            <hr>

            <div class="cart-overview js-cart" data-refresh-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?ajax=1&amp;action=refresh">
                <ul class="cart-items">
                    @foreach(Cart::content() as $row)
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
                                        <a class="label" href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/17-quisque-at-orci-gravid-.html">
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
                                        <div class="col-xs-4 hidden-md-up"></div>
                                        <div class="col-md-10 col-xs-6">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-6 qty">
                                                    <div class="input-group bootstrap-touchspin">
                                                        <input class="js-cart-line-product-quantity form-control" data-product-id="17" type="text" value="{{ $row->qty }}" name="product-quantity-spin" min="1" style="display: block;">
                                                        <span class="input-group-btn-vertical">
                                                            <button class="btn btn-touchspin js-touchspin js-increase-product-quantity bootstrap-touchspin-up" type="button">
                                                                <i class="material-icons touchspin-up"></i>
                                                            </button>
                                                            <button class="btn btn-touchspin js-touchspin js-decrease-product-quantity bootstrap-touchspin-down" type="button">
                                                                <i class="material-icons touchspin-down"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-2 price">
                                                    <span class="product-price">
                                                        <strong>
                                                          <span class="value">৳ {{ $row->price }}</span>
                                                        </strong>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2 text-xs-right">
                                            <div class="cart-line-product-actions ">
                                                <a class="remove-from-cart" rel="nofollow">
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

        <div class="card cart-summary">

            <div class="cart-detailed-totals">

                <div class="card-block">
                    <div class="cart-summary-line" id="cart-subtotal-products">
                        <span class="label js-subtotal">
                            {{ \Cart::content()->count() }} items
                        </span>
                        <span class="value">৳{{ \Cart::subtotal() }}</span>
                    </div>
                </div>

                <hr>

                <div class="card-block">
                    <div class="cart-summary-line">
                        <small class="label">Taxes</small>
                        <small class="value">৳{{ \Cart::tax() }}</small>
                    </div>
                    <div class="cart-summary-line cart-total">
                        <span class="label">Total (tax excl.)</span>
                        <span class="value">৳{{ \Cart::total() }}</span>
                    </div>
                   
                </div>

                <hr>
            </div>

            <div class="checkout cart-detailed-actions card-block">
                <div class="text-xs-center">
                    <a href="{{ asset('checkout') }}" class="btn btn-primary">Checkout</a>
                </div>
            </div>

        </div>

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