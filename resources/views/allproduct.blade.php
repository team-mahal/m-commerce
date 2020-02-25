@extends('layouts.app')

@section('content')
<section id="wrapper">
    <h2>.</h2>
    <div class="container">

        <div class="row">
            
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
                @include('inc.side_bar_categories')
                <!-- MODULE News Products Products -->
                <div class="block special_block_right vertical_mode clearfix">
                    <h4 class="title_block title_font">
                        <span class="title_text">Top sellers</span>
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

            <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">

                <section id="main">

                    <section id="products" class="active_grid">

                        <div id="js-product-list-top" class="products-selection">
                            <div class="click-product-list-grid">
                                <div class="click-product-grid"><i class="fa fa-th"></i></div>
                            </div>
                            <div class="box-sort-by">

                                <span class="sort-by">Sort by:</span>
                                <div class="products-sort-order dropdown" id="dropdown-hander">
                                    <a class="select-title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Price, high to low <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <?php
                                            $cat_id='';
                                            if(Request::segment(1)=='category') $cat_id=Request::segment(2);
                                            if(isset($_GET['cat_id']))$cat_id=$_GET['cat_id'];
                                        ?>
                                        <a href="/allproduct?cat_id={{ $cat_id}}&page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.date_add.desc" class="select-list">
                                            Date added, newest to oldest
                                          </a>
                                        <a href="/allproduct?cat_id={{$cat_id}}&page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.date_add.asc" class="select-list">
                                            Date added, oldest to newest
                                          </a>
                                        <a href="/allproduct?cat_id={{$cat_id}}&page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.name.asc" class="select-list">
                                            Name, A to Z
                                          </a>
                                        <a href="/allproduct?cat_id={{$cat_id}}&page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.name.desc" class="select-list">
                                            Name, Z to A
                                          </a>
                                        <a href="/allproduct?cat_id={{$cat_id}}&page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.price.asc" class="select-list">
                                            Price, low to high
                                          </a>
                                        <a href="/allproduct?cat_id={{$cat_id}}&page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.price.desc" class="select-list current">
                                            Price, high to low
                                          </a>
                                    </div>
                                </div>

                            </div>
                            <div class="total-products">
                                <p>There are {{ count($products) }} products.</p>
                            </div>

                        </div>

                        <div class="hidden-sm-down">

                        </div>

                        <div id="product_list_grid">

                            <div id="js-product-list">
                                <div class="products horizontal_mode">
                                    <div id="box-product-grid">
                                        
                                        @foreach($products->chunk(3) as $chunk)
                                        <div class="row">
                                            @foreach($chunk as $product)
                                                
                                                <div class="item col-xs-12 col-sm-6 col-md-4">
                                                    <div class="item-inner">
                                                        <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                            <div class="left-product" style="text-align: center;">
                                                                <a href="" class="thumbnail product-thumbnail" style="min-height: 250px;max-height: 250px;">
                                                                    @if($product->images && count($product->images)>0)
                                                                        <span class="cover_image">
                                                                            <img style="min-height: 250px;max-height: 250px;object-fit: cover;" src="{{ asset('uploads/products/'.$product->images[0]->name) }}" data-full-size-image-url="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}" >
                                                                        </span>
                                                                        <span class="hover_image">
                                                                            <img style="min-height: 250px;max-height: 250px;object-fit: cover;" src="{{ asset('uploads/products/'.$product->images[0]->name) }}" data-full-size-image-url="{{ asset('uploads/products/'.$product->images[0]->name) }}"> 
                                                                        </span>
                                                                    @else
                                                                        <span class="hover_image">
                                                                            <img style="min-height: 250px;max-height: 250px;object-fit: cover;" src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                                                                        </span>
                                                                        <span class="cover_image">
                                                                            <img style="min-height: 250px;max-height: 250px;object-fit: cover;" src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                                                                        </span>
                                                                    @endif
                                                                </a>
                                                                <div class="conditions-box">

                                                                </div>
                                                                <div class="quick-view-product">
                                                                    <a href="javascript:void(0)"  data-id="{{ $product->id }}" class="quick-view" title="Quick view">
                                                                        <i class="fa fa-eye"></i> Quick view
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="right-product">
                                                                <div class="product-description">
                                                                    <div class="product_name">
                                                                        <a href="">{{ $product->name }}</a></div>
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
                                                                </div>
                                                            </div>
                                                            <div class="addtocart">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="token" value="d25bc0f4d821fe67c876730ee3cf24a9">
                                                                    <input type="hidden" name="id_product" value="24">
                                                                    <button class="add-to-cart" data-button-action="add-to-cart" type="button" onclick="cart('{{ $product->id }}')">
                                                                        <span title="Add to cart"><i class="fa fa-shopping-cart"></i>
                                                                            ADD TO CART
                                                                        </span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            @endforeach
                                            </div>
                                        @endforeach
                                        
                                    </div>

                                </div>
                                @include('inc.model')
                                <!-- templates/_partials/pagination.tpl -->
                                <nav class="pagination">
                                    <div class="col-md-6">
                                        Showing 10-18 of {{ count($products) }} item(s)
                                    </div>
                                    <div class="col-md-6">
                                        {{ $products->links('inc.pagination') }}
                                    </div>
                                </nav>

                            </div>

                        </div>

                        <div id="js-product-list-bottom"></div>

                    </section>

                </section>

            </div>

        </div>

    </div>

</section>
@endsection