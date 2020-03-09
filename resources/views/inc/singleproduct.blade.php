<div class="item">
    <div class="item-inner">
        <div class="product-miniature js-product-miniature">
            <div class="left-product">
                <a href="{{ $new->route }}" class="thumbnail product-thumbnail">
                    <span class="cover_image">
                        @if($new->images && count($new->images)>0)
                            <img style="height: 200px!important;" src="{{ asset('uploads/products/'.$new->images[0]->name) }}" alt="{{ $new->name }}">
                        @else
                            <img style="height: 200px!important;" src="{{ asset('/assets/download.png') }}" alt="{{ $new->name }}">
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
                    <a href="javascript:void(0)"  data-id="{{ $new->id }}" class="quick-view" title="Quick view">
                        <i class="fa fa-eye"></i> Quick view
                    </a>
                </div>
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
            </div>
            <div class="addtocart">
                <button class="add-to-cart" type="submit" onclick="cart('{{ $new->id }}')">
                    <span title="Add to cart"><i class="fa fa-shopping-cart"></i>
                        ADD TO CART
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>