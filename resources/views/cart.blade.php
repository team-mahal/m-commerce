@extends('layouts.app')

@section('content')
    <div class="container">

        <div id="content-wrapper">

            <section id="main">
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
                                    <li class="cart-item">
                                        <div class="product-line-grid">
                                            <!--  product left content: image-->
                                            <div class="product-line-grid-left col-md-3 col-xs-4">
                                                <span class="product-image media-middle">
                                                  <img src="https://demo.fieldthemes.com/ps_medicine/home2/81-cart_default/quisque-at-orci-gravid-.jpg" alt="Quisque at orci gravid,">
                                                </span>
                                            </div>

                                            <!--  product left body: description -->
                                            <div class="product-line-grid-body col-md-4 col-xs-8">
                                                <div class="product-line-info">
                                                    <a class="label" href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/17-quisque-at-orci-gravid-.html">Quisque at orci gravid,</a>
                                                </div>

                                                <div class="product-line-info">
                                                    <span class="value">$25.39</span>
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
                                                                <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                                    <input class="js-cart-line-product-quantity form-control" data-down-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?update=1&amp;id_product=17&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9&amp;op=down" data-up-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?update=1&amp;id_product=17&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9&amp;op=up" data-update-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?update=1&amp;id_product=17&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9" data-product-id="17" type="text" value="2" name="product-quantity-spin" min="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin js-increase-product-quantity bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin js-decrease-product-quantity bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-2 price">
                                                                <span class="product-price">
                  <strong>
                                      $50.78
                                  </strong>
                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-2 text-xs-right">
                                                        <div class="cart-line-product-actions ">
                                                            <a class="remove-from-cart" rel="nofollow" href="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?delete=1&amp;id_product=17&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9" data-link-action="delete-from-cart" data-id-product="17" data-id-product-attribute="0" data-id-customization="">
                                                                <i class="material-icons pull-xs-left">delete</i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="product-line-grid">
                                            <!--  product left content: image-->
                                            <div class="product-line-grid-left col-md-3 col-xs-4">
                                                <span class="product-image media-middle">
          <img src="https://demo.fieldthemes.com/ps_medicine/home2/85-cart_default/nam-mollis-porta-facilisis.jpg" alt="Nam mollis porta facilisis.">
        </span>
                                            </div>

                                            <!--  product left body: description -->
                                            <div class="product-line-grid-body col-md-4 col-xs-8">
                                                <div class="product-line-info">
                                                    <a class="label" href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/21-nam-mollis-porta-facilisis.html">Nam mollis porta facilisis.</a>
                                                </div>

                                                <div class="product-line-info">
                                                    <span class="value">$55.45</span>
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
                                                                <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                                                    <input class="js-cart-line-product-quantity form-control" data-down-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?update=1&amp;id_product=21&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9&amp;op=down" data-up-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?update=1&amp;id_product=21&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9&amp;op=up" data-update-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?update=1&amp;id_product=21&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9" data-product-id="21" type="text" value="5" name="product-quantity-spin" min="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin js-increase-product-quantity bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin js-decrease-product-quantity bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-2 price">
                                                                <span class="product-price">
                  <strong>
                                      $277.25
                                  </strong>
                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-2 text-xs-right">
                                                        <div class="cart-line-product-actions ">
                                                            <a class="remove-from-cart" rel="nofollow" href="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?delete=1&amp;id_product=21&amp;id_product_attribute=0&amp;token=d25bc0f4d821fe67c876730ee3cf24a9" data-link-action="delete-from-cart" data-id-product="21" data-id-product-attribute="0" data-id-customization="">
                                                                <i class="material-icons pull-xs-left">delete</i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <a class="label" href="https://demo.fieldthemes.com/ps_medicine/home2/en/">
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
                              7 items
                          </span>
                                        <span class="value">$328.03</span>
                                    </div>
                                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                                        <span class="label">
                              Shipping
                          </span>
                                        <span class="value">$7.00</span>
                                        <div><small class="value"></small></div>
                                    </div>
                                </div>

                                <hr>

                                <div class="card-block">
                                    <div class="cart-summary-line cart-total">
                                        <span class="label">Total (tax excl.)</span>
                                        <span class="value">$335.03</span>
                                    </div>

                                    <div class="cart-summary-line">
                                        <small class="label">Taxes</small>
                                        <small class="value">$0.00</small>
                                    </div>
                                </div>

                                <hr>
                            </div>

                            <div class="checkout cart-detailed-actions card-block">
                                <div class="text-xs-center">
                                    <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/order" class="btn btn-primary">Checkout</a>

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
            </section>

        </div>

    </div>
@endsection