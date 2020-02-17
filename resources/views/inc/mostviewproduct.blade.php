<div id="field_newproductslider_block" class="block vertical_mode col-xs-12 clearfix">
    <h4 class="title_block title_font">
        <a href="{{ url('allproduct') }}" title="MOST VIEW">
            All Product
        </a>
    </h4>

    <div class="row">
        <div id="new_products" class="carousel-grid owl-carousel">
            <!--Number Row-->
        @foreach($mostview as $new)
            <div class="item">
                <div class="item-inner">
                    <div class="product-miniature js-product-miniature" data-id-product="35" data-id-product-attribute="18" itemscope itemtype="http://schema.org/Product">
                        <div class="left-product">
                            <a href="{{ $new->route }}" class="thumbnail product-thumbnail">
                                <span class="cover_image">
                                    @if($new->images && count($new->images)>0)
                                        <img  style="height: 100px;width: 100px;" src="{{ asset('uploads/products/'.$new->images[0]->name) }}" alt="{{ $new->name }}" data-full-size-image-url="{{ asset('uploads/products/'.$new->images[0]->name) }}" alt="{{ $new->name }}">
                                    @else
                                        <img  style="height: 100px;width: 100px;margin-top: 10px;" src="{{ asset('/assets/download.png') }}" alt="{{ $new->name }}" data-full-size-image-url="{{ asset('/assets/download.png') }}">
                                    @endif
                                </span>
                            </a>
                        </div>
                        <div class="right-product">
                            <div class="product-description">
                                <div class="product_name"><a href="{{ $new->route }}">{{ $new->name }}</a></div>
                                <div class="product-price-and-shipping">

                                    @if($new->specificPrice)
                                        <span class="price">৳{{ $new->price-$new->specificPrice->reduction }}</span>
                                    @else
                                        <span class="price">৳{{ $new->price }}</span>
                                    @endif

                                    @if($new->specificPrice)
                                        <span class="regular-price">৳{{ $new->price }}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="quick-view-product">
                                <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                    <i class="fa fa-eye"></i> Quick view Quick view
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">
    var fieldnewpsl_maxitem = 3;

    var fieldnewpsl_mediumitem = 2;
    var fieldnewpsl_minitem = 1
    var fieldnewpsl_autoscroll = false;
    var fieldnewpsl_pauseonhover = true;
    var fieldnewpsl_pagination = false;
    var fieldnewpsl_navigation = true;

    $(document).ready(function() {
        $('#new_products').owlCarousel({
            itemsCustom: [
                [0, 1],
                [320, 1],
                [480, fieldnewpsl_minitem],
                [568, fieldnewpsl_mediumitem],
                [992, fieldnewpsl_maxitem],
                [1200, fieldnewpsl_maxitem]
            ],
            responsiveRefreshRate: 50,
            slideSpeed: 200,
            paginationSpeed: 500,
            rewindSpeed: 600,
            autoPlay: fieldnewpsl_autoscroll,
            stopOnHover: fieldnewpsl_pauseonhover,
            rewindNav: true,
            pagination: fieldnewpsl_pagination,
            navigation: fieldnewpsl_navigation,
            navigationText: ['<div class="carousel-previous disable-select"><span class="fa fa-angle-left"></span></div>', '<div class="carousel-next disable-select"><span class="fa fa-angle-right"></span></div>']
        });
    });
</script>
