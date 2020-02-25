<div class="row">
    <div class="col-sm-5">

        <div class="images-container">

            <div class="product-cover">
                @if($product->images && count($product->images)>0)
                    <img src="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}">
                @else
                    <img src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                @endif
              
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
                @if($product->specificPrice)
                    <span class="price">৳{{ $product->price-$product->specificPrice->reduction }}</span>
                @else
                    <span class="price">৳{{ $product->price }}</span>
                @endif

                @if($product->specificPrice)
                    <span class="regular-price">৳{{ $product->price }}</span>
                @endif
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
                            <button class="btn btn-primary add-to-cart" type="button" onclick="cart('{{ $product->id }}')">
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

    </div>
</div>