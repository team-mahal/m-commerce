@extends('layouts.app')

@section('content')
    {{-- @include('layouts.inc.slider'); --}}
        <section id="wrapper">
            <div class="container">
                <div id="content-wrapper">
                    <section id="main">
                        <section id="content" class="page-home">
                            <div class="row">
                                <div class="col-xs-12 col-md-9">
                                    <div id="fieldtabproductsisotope" class="horizontal_mode">
                                        <ul class="fieldtabproductsisotope-filters">
                                            <li class="fieldtabproductsisotope-filter title_font">
                                                <a href="#" data-filter="new-arrivals" class="active">
                                                <span class="text">New Arrivals</span> </a>
                                            </li>
                                            <li class="fieldtabproductsisotope-filter title_font">
                                                <a href="#" data-filter="hot-products" class="">
                                                <span class="text">HOT PRODUCTS</span> </a>
                                            </li>
                                        </ul>

                                        <div class="row">
                                            <div class="fieldtabproductsisotope-products">
                                                <ul class="isotope-grid">
                                                    @foreach($newarrivels as $new)
                                                        <li class="col-xs-12 col-sm-6 col-md-3 isotope-item item new-arrivals">
                                                            <div class="item">
                                                                <div class="item-inner">
                                                                    <div class="product-miniature js-product-miniature">
                                                                        <div class="left-product">
                                                                            <a href="" class="thumbnail product-thumbnail">
                                                                                <span class="cover_image">
                                                                                    @if($new->images && count($new->images)>0)
                                                                                        <img src="{{ asset('uploads/products/'.$new->images[0]->name) }}" alt="{{ $new->name }}">
                                                                                    @else
                                                                                        <img src="{{ asset('/assets/download.png') }}" alt="{{ $new->name }}">
                                                                                    @endif
                                                                                </span>
                                                                            </a>
                                                                            <div class="conditions-box">
                                                                                <span class="sale_product">Sale</span>
                                                                            </div>
                                                                            <span class="item-countdown">
                                                                                <span class="bg_tranp"></span>
                                                                                <span class="item-countdown-time" data-time="2020-12-31 00:00:00"></span>
                                                                            </span>
                                                                            <div class="quick-view-product">
                                                                                <a href="javascript:void(0)" data-id="{{ $new->id }}" class="quick-view" title="Quick view" data-toggle="modal" data-target="#quickview-modal-18-0">
                                                                                    <i class="fa fa-eye"></i> Quick view
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-product">
                                                                            <div class="product-description">
                                                                                <div class="product_name"><a href="">{{ $new->name }}</a></div>
                                                                                <div class="product-price-and-shipping">
                                                                                    @if($new->specificPrice)
                                                                                        <span class="price">{{ $new->price-$new->specificPrice->reduction }}</span>
                                                                                    @else
                                                                                        <span class="price">{{ $new->price }}</span>
                                                                                    @endif

                                                                                    @if($new->specificPrice)
                                                                                        <span class="regular-price">{{ $new->price }}</span>
                                                                                    @endif

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="addtocart">
                                                                            <form action="{{ url('addtocart') }}" method="post">
                                                                                 {{csrf_field()}}
                                                                                <input type="hidden" name="product_id" value="{{ $new->id }}">
                                                                                <button class="add-to-cart" type="submit">
                                                                                    <span title="Add to cart"><i class="fa fa-shopping-cart"></i>
                                                                                        ADD TO CART
                                                                                    </span>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="isotope-item item grid-sizer"></li>
                                                    @endforeach
                                                    @foreach($newarrivels as $new)
                                                        <li class="col-xs-12 col-sm-6 col-md-3 isotope-item item hot-products">
                                                            <div class="item">
                                                                <div class="item-inner">
                                                                    <div class="product-miniature js-product-miniature">
                                                                        <div class="left-product">
                                                                            <a href=""
                                                                                class="thumbnail product-thumbnail">
                                                                                <span class="cover_image">
                                                                                    <img
                                                                                      src = "https://demo.fieldthemes.com/ps_medicine/home2/84-home_default/fusce-porttitor-augue-lectus.jpg"
                                                                                      data-full-size-image-url = "https://demo.fieldthemes.com/ps_medicine/home2/84-large_default/fusce-porttitor-augue-lectus.jpg"
                                                                                    alt=""
                                                                                    >
                                                                                </span>
                                                                                <span class="hover_image">
                                                                                    <img 
                                                                                      src = "https://demo.fieldthemes.com/ps_medicine/home2/124-home_default/fusce-porttitor-augue-lectus.jpg"
                                                                                      data-full-size-image-url = "https://demo.fieldthemes.com/ps_medicine/home2/124-home_default/fusce-porttitor-augue-lectus.jpg"
                                                                                      alt=""
                                                                                    > 
                                                                                </span>
                                                                            </a>
                                                                            <div class="conditions-box">
                                                                                <span class="sale_product">Sale</span>
                                                                            </div>
                                                                            <span class="item-countdown">
                                                                                <span class="bg_tranp"></span>
                                                                                <span class="item-countdown-time" data-time="2020-12-31 00:00:00"></span>
                                                                            </span>
                                                                            <div class="quick-view-product">
                                                                                <a href="javascript:void(0)" class="quick-view" data-link-action="quickview" title="Quick view">
                                                                                    <i class="fa fa-eye"></i> Quick view
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="right-product">
                                                                            <div class="product-description">
                                                                                <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/20-fusce-porttitor-augue-lectus.html">Fusce porttitor augue...</a></div>
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">$45.10</span>

                                                                                    <span class="regular-price">$60.59</span>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="addtocart">
                                                                            <form action="https://demo.fieldthemes.com/ps_medicine/home2/en/cart" method="post">
                                                                                <input type="hidden" name="token" value="d25bc0f4d821fe67c876730ee3cf24a9">
                                                                                <input type="hidden" name="id_product" value="20">
                                                                                <button class="add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                    <span title="Add to cart"><i class="fa fa-shopping-cart"></i>
                                                                                    ADD TO CART
                                                                                    </span>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="isotope-item item grid-sizer"></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <div class="row">
                                                    <div class="banner_top_1">
                                                        <div class="image-link">
                                                            <a href="{{ asset('productdetails') }}">
                                                                <img src="/ps_medicine/home2/modules/fieldstaticblocks/images/banner2_2.jpg" alt="" height="200" width="570" />
                                                            </a>
                                                            <div class="overplay"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <div class="row">
                                                    <div class="banner_top_1">
                                                        <div class="image-link">
                                                            <a href="{{ asset('productdetails') }}">
                                                                <img src="/ps_medicine/home2/modules/fieldstaticblocks/images/banner2_1.jpg" alt="" height="200" width="570" />
                                                            </a>
                                                            <div class="overplay"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    @include('inc.mostviewproduct')

                                </div>

                            @include('inc.model')
                            
                            @include('inc.sidebar')

                            </div>
                            
                            @include('inc.blogpost')

                        </section>
                    </section>

                </div>

            </div>

        </section>

@endsection