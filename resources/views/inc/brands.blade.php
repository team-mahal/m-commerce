<div class="Brands-block-slider">
    <div class="container">
        <div id="fieldbrandslider" class="block horizontal_mode">
            <h4 class="title_block title_font"><a class="title_text" href="#">Top Brands</a></h4>
            <div class="row">
                <div id="fieldbrandslider-manufacturers" class="sdsblog-box-content grid carousel-grid owl-carousel">
                    @forelse($brands as $key=>$value)
                        <div class="item">
                            <a class="img-wrapper" href="" title="brand1">
                                <img class="img-responsive" src="{{ $value->image }}" alt="brand1" style="height: 100px;width: 200px">
                            </a>
                        </div>
                    @empty
                        <p>Empty</p>
                    @endforelse
                </div>
              {{--   <div class="owl-controls clickable">
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
</div>