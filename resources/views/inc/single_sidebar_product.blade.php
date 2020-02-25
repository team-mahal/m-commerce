<div class="owl-item">
    <div class="item">
        <div class="item-inner">
            <div class="product-miniature js-product-miniature" data-id-product="35" data-id-product-attribute="18" itemscope itemtype="http://schema.org/Product">
                <div class="left-product">
                    <a href="{{ $new->route }}" class="thumbnail product-thumbnail">
                        <span class="cover_image">
                            @if($new->images && count($new->images)>0)
                                <img  style="height: 100px;width: 100px;" src="{{ asset('uploads/products/'.$new->images[0]->name) }}" alt="{{ $new->name }}" data-full-size-image-url="{{ asset('uploads/products/'.$new->images[0]->name) }}" alt="{{ $new->name }}">
                            @else
                                <img  style="height: 100px;width: 100px;margin-top: 0px;" src="{{ asset('/assets/download.png') }}" alt="{{ $new->name }}" data-full-size-image-url="{{ asset('/assets/download.png') }}">
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
</div>