<div id="field_newproductslider_block" class="block vertical_mode col-xs-12 clearfix">
    <h4 class="title_block title_font">
        <a href="{{ url('allproduct') }}" title="MOST VIEW">
            All Product
        </a>
    </h4>

    <div class="row">
        <div id="new_products" class="sdsblog-box-content grid carousel-grid owl-carousel">
            <!--Number Row-->
        @foreach($mostview as $new)
            @include('inc.single_list_view_product_cart',['new'=>$new])
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
