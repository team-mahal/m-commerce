<div class="row">
    <div class="col-sm-5">

        <div class="images-container">

            <div class="product-cover">
                @if($product->images && count($product->images)>0)
                    <img src="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}">
                @else
                    <img src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                @endif
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                    <i class="material-icons zoom-in"></i>
                </div>
            </div>

           <div class="js-qv-mask mask">
                <div class="product-images js-qv-product-images carousel-grid" style="opacity: 1; display: block;">
                    <div class="owl-wrapper product-images-69640165 model-product owl-carousel owl-theme">
                        @foreach($product->images as $image)
                            <div class="item">
                                <img class="thumb js-thumb " data-image-medium-src="{{ asset('uploads/products/'.$image->name) }}" data-image-large-src="{{ asset('uploads/products/'.$image->name) }}" src="{{ asset('uploads/products/'.$image->name) }}" alt="">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.model-product').owlCarousel({
                        loop:true,
                        margin:10,
                    })
                });
            </script>

        </div>
    </div>

    <div class="col-sm-7">
        <h1 class="h1 product-title">{{ $product->name }}</h1>

        <div class="product-prices">

            <div class="product-price h5">
                <link itemprop="availability">
                <div class="current-price">
                    <span></span>
                </div>
            </div>

            <div class="tax-shipping-delivery-label">

            </div>
        </div>

        <div id="product-description-short">
            <p class="description">{{ $product->description }}</p>
        </div>

        <div class="product-actions">
            <form action="{{ url('addtocart') }}" method="post" id="add-to-cart-or-refresh">
                 {{csrf_field()}}
                 <input type="hidden" name="product_id" value="" class="product_id">

                <div class="product-variants">
                </div>

                <div class="product-add-to-cart">

                    <div class="product-quantity">
                        <div class="add">
                            <button class="btn btn-primary add-to-cart" type="submit">
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

                <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="Refresh" hidden="">

            </form>
        </div>

        <div class="social-sharing">
            <span>Share</span>
            <ul>
                <li class="facebook icon-gray"><a href="http://www.facebook.com/sharer.php?u=https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html" class="text-hide" title="Share" target="_blank">Share</a></li>
                <li class="twitter icon-gray"><a href="https://twitter.com/intent/tweet?text=Aliquam tincidunt mauris. https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html" class="text-hide" title="Tweet" target="_blank">Tweet</a></li>
                <li class="googleplus icon-gray"><a href="https://plus.google.com/share?url=https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html" class="text-hide" title="Google+" target="_blank">Google+</a></li>
                <li class="pinterest icon-gray"><a href="http://www.pinterest.com/pin/create/button/?media=https://demo.fieldthemes.com/ps_medicine/home2/82/aliquam-tincidunt-mauris.jpg&amp;url=https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html" class="text-hide" title="Pinterest" target="_blank">Pinterest</a></li>
            </ul>
        </div>

    </div>
</div>