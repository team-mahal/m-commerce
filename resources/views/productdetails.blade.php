@extends('layouts.app')

@section('content')
<section id="wrapper">
    <h2 style="display:none;">.</h2>
    <div class="container">
        <br><br>
        <div class="row">

            <div id="content-wrapper" class="right-column col-xs-12 col-sm-8 col-md-9">
                <section id="main" itemscope="" itemtype="https://schema.org/Product">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">

                            <section class="page-content horizontal_mode" id="content">

                                <div class="conditions-box">

                                </div>

                                <div class="images-container">

                                    <div class="product-cover">
                                        @if($product->images && count($product->images)>0)
                                            <img class="js-qv-product-cover img-responsive" src="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}" title="" style="max-width:100%;height:auto" itemprop="image">
                                        @else
                                            <img class="js-qv-product-cover img-responsive" src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                                        @endif
                                        <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                            <i class="material-icons zoom-in"></i>
                                        </div>
                                    </div>

                                    <div class="js-qv-mask mask">
                                        <div class="product-images js-qv-product-images carousel-grid" style="opacity: 1; display: block;">
                                            <div class="owl-wrapper product-images-69640165 owl-carousel owl-theme owl-carousel-img">
                                                @foreach($product->images as $image)
                                                    <div class="item" style="padding: 0px">
                                                         <div class="thumb-container">
                                                            <img style="width: 60px;height: 60px" class="thumb js-thumb " data-image-medium-src="{{ asset('uploads/products/'.$image->name) }}" data-image-large-src="{{ asset('uploads/products/'.$image->name) }}" src="{{ asset('uploads/products/'.$image->name) }}" alt="" title="" width="100" itemprop="image">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('.owl-carousel-img').owlCarousel({
                                                loop:true,
                                                margin:10,
                                                nav:true,
                                                responsive:{
                                                    0:{
                                                        items:1
                                                    },
                                                    600:{
                                                        items:3
                                                    },
                                                    1000:{
                                                        items:5
                                                    }
                                                }
                                            })
                                        });
                                    </script>

                                </div>
                                <!-- Begin elevateZoom Header block -->
                                <script type="text/javascript">
                                    var zoom_type = 'window';
                                    var zoom_fade_in = 400;
                                    var zoom_fade_out = 550;
                                    var zoom_cursor_type = 'default';
                                    var zoom_window_pos = 1;
                                    var zoom_scroll = true;
                                    var zoom_easing = true;
                                    var zoom_tint = true;
                                    var zoom_tint_color = '#333';
                                    var zoom_tint_opacity = 0.4;
                                    var zoom_lens_shape = 'round';
                                    var zoom_lens_size = 345;
                                </script>
                                <script type="text/javascript">
                                    function applyElevateZoom() {
                                        var bigimage = $('.js-qv-product-cover').attr('src');
                                        $('.js-qv-product-cover').elevateZoom({
                                            zoomType: zoom_type,
                                            cursor: zoom_cursor_type,
                                            zoomWindowFadeIn: zoom_fade_in,
                                            zoomWindowFadeOut: zoom_fade_out,
                                            zoomWindowPosition: zoom_window_pos,
                                            scrollZoom: zoom_scroll,
                                            easing: zoom_easing,
                                            tint: zoom_tint,
                                            tintColour: zoom_tint_color,
                                            tintOpacity: zoom_tint_opacity,
                                            lensShape: zoom_lens_shape,
                                            lensSize: zoom_lens_size,
                                            zoomImage: bigimage,
                                            borderSize: 1,
                                            borderColour: '#e5e5e5',
                                            zoomWindowWidth: 461,
                                            zoomWindowHeight: 461,
                                            zoomLevel: 0.7,
                                            lensBorderSize: 0
                                        });
                                    }
                                    $(document).ready(function(e) {
                                        if ($(".zoomContainer").length) {
                                            $(".zoomContainer").remove();
                                        }
                                        applyElevateZoom();
                                        $(document).on('click', '.input-color', function(e) {
                                            restartElevateZoom();
                                        });
                                        $(document).on('click', '.js-qv-mask li img', function(e) {
                                            restartElevateZoom();
                                        });
                                    });

                                    function restartElevateZoom() {
                                        $(".zoomContainer").remove();
                                        applyElevateZoom();
                                    }
                                </script>
                                <!-- End elevateZoom Header block -->

                            </section>

                        </div>

                        <div class="col-lg-6 col-md-6">

                            <h1 class="h1" itemprop="name">{{ $product->name }}</h1>

                            <div class="product-price-and-shipping">
                                @if($product->specificPrice)
                                    <span class="price">৳{{ $product->price-$product->specificPrice->reduction }}</span>
                                @else
                                    <span class="price">৳{{ $product->price }}</span>
                                @endif

                                @if($product->specificPrice)
                                    <span class="regular-price">৳{{ $product->price }}</span>
                                @endif
                            </div>

                            <div class="product-information">

                                <div id="product-description-short-35" itemprop="description">
                                    <p>{!! $product->description !!}</p>
                                </div>
    
                                @if(isset($product->categories[0]))
                                    <div>
                                        Categories : <a href="{{ $product->categories[0]->name }}">{{ $product->categories[0]->name }}</a>
                                    </div>
                                @endif

                                @if(isset($product->brand))    
                                    <div>
                                        Brand : {{ $product->brand->name }}
                                    </div>
                                @endif

                                @if(isset($product->generic))    
                                    <div>
                                        Generic {{ $product->generic->name }}
                                    </div>
                                @endif
                                    
                                <div id="product-description-short">
                                    <p class="description">{!! $product->instruction !!}</p>
                                </div>


                                <div class="product-actions">

                                    <form action="" method="post" id="add-to-cart-or-refresh">
                                      
                                        <div class="product-add-to-cart">

                                            <div class="product-quantity">
                                                <div class="qty">
                                                    <span class="control-label">Quantity</span>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;">
                                                        <span class="input-group-btn-vertical">
                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                <i class="material-icons touchspin-up"></i>
                                                            </button>
                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                <i class="material-icons touchspin-down"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="add">
                                                    <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="button" onclick="cart({{ $product->id }})">
                                                        <i class="fa fa-shopping-cart shopping-cart"></i> Add to cart
                                                    </button>

                                                    <span id="product-availability">
                                                    </span>

                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <p class="product-minimal-quantity">
                                            </p>

                                        </div>

                                        <div class="social-sharing">
                                            <span>Share</span>
                                            <ul>
                                                <li class="facebook icon-gray">
                                                    <a  data-sharer="facebook" data-title="{{ $product->name }}" data-url="{{ $product->route }}" class="text-hide" title="Share" target="_blank">Share</a>
                                                </li>
                                               <li class="twitter icon-gray">
                                                    <a  data-sharer="twitter" data-title="{{ $product->name }}" data-url="{{ $product->route }}" class="text-hide" title="Share" target="_blank">Twitter</a>
                                                </li>
                                                <li class="whatsapp icon-gray">
                                                    <a  data-sharer="whatsapp" data-web data-title="{{ $product->name }}" data-url="{{ $product->route }}" class="text-hide" title="Share" target="_blank">whatsapp</a>
                                                </li>
                                                <li class="linkedin icon-gray">
                                                    <a  data-sharer="linkedin" data-title="{{ $product->name }}" data-url="{{ $product->route }}" class="text-hide" title="Share" target="_blank">Linkedin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#product-details">Product Details</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                <div class="product-description">
                                    {!! $product->description !!}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="product-details" data-product="">

                                <div class="product-quantities">
                                    <label class="label">In stock</label>
                                    <span>{{ $product->stock }} Items</span>
                                </div>

                                <div class="product-out-of-stock">

                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <!-- MODULE Field product cates -->
                <div id="field_productcates" class="block horizontal_mode">
                    <h4 class="title_block title_font"><span class="title_text">{{ count($relatedproduct->products) }} other product in the same category</span></h4>

                    <div class="row">
                        <div id="productCates" class="carousel-grid" style="opacity: 1; display: block;">

                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper owl-carousel owl-theme owl-carousel-feature">   
                                    @forelse($relatedproduct->products as $product)
                                        @include('inc.singleproduct',['new'=>$product,'owl'=>2])
                                    @empty
                                        <p>Empty</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <!-- /MODULE Field product cates -->
            </div>

            {{-- sidebar --}}
            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
                @include('inc.side_bar_categories')
                <!-- MODULE Featured Products Products -->
                <div class="block special_block_right vertical_mode clearfix">
                    <h4 class="title_block title_font">
                        <span class="title_text">New Products</span>
                    </h4>

                    <div class="special_products carousel-grid">
                        <!--Number Row-->
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper">
                                @forelse($newproduct as $new)
                                    @include('inc.single_sidebar_product',['new'=>$new])
                                @empty
                                    <p>Empty</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @include('inc.model')
</section>
@endsection