<div id="onecate_products_block" class="block horizontal_mode clearfix ">
    <div class="container">
        <h4 class="title_block title_font">
            <span class="title_text">Hot deals</span>
        </h4>
        <div class="row">
            <div id="onecate_products" class="hotproduct carousel-grid owl-carousel owl-theme" style="opacity: 1; display: block;">
                @forelse($hotproduct as $product)
                    @include('inc.singleproduct',['new'=>$product])
                @empty
                    <p>Empty</p>
                @endforelse
            </div>
           {{--  <div class="owl-controls clickable">
                <div class="owl-buttons">
                    <div class="owl-prev">
                        <div class="carousel-previous disable-select"><span class="fa fa-angle-left"></span></div>
                    </div>
                    <div class="owl-next">
                        <div class="carousel-next disable-select"><span class="fa fa-angle-right"></span></div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>