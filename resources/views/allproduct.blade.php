@extends('layouts.app')

@section('content')
<section id="wrapper">
    <h2>.</h2>
    <div class="container">

        <div class="row">

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
                <div class="block-categories hidden-sm-down">
                    <ul class="category-top-menu ">
                        <li>
                            <ul id="tree1" class="category-sub-menu">
                                <li>
                                    <h3>Category List</h3>
                                </li>
                                @foreach($categories as $category)

                                    <li>

                                        {{ $category->name }}

                                        @if(count($category->childs))

                                            @include('inc.manageChild',['childs' => $category->childs])

                                        @endif

                                    </li>

                                @endforeach

                            </ul>
                        </li>
                    </ul>
                </div>
             
                <!-- MODULE News Products Products -->
                <div id="best-sellers_block_right" class="block vertical_mode clearfix">
                    <h4 class="title_block title_font">      
                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/best-sales" title="View a top sellers products">
                            Top sellers
                        </a>
                    </h4>

                    <div class="row">
                        <div id="field_bestsellers" class="carousel-grid owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <!--Number Row-->

                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 540px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 270px;">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="left-product">
                                                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/21-nam-mollis-porta-facilisis.html" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                                                                <img src="https://demo.fieldthemes.com/ps_medicine/home2/85-small_default/nam-mollis-porta-facilisis.jpg" data-full-size-image-url="https://demo.fieldthemes.com/ps_medicine/home2/85-large_default/nam-mollis-porta-facilisis.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-product">
                                                        <div class="product-description">
                                                            <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/21-nam-mollis-porta-facilisis.html">Nam mollis porta facilisis.</a></div>
                                                            <div class="product-price-and-shipping">

                                                                <span class="regular-price">$58.56</span>

                                                                <span class="price">$55.45</span>

                                                            </div>
                                                        </div>
                                                        <div class="quick-view-product">
                                                            <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                                                <i class="fa fa-eye"></i> Quick view
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-inner">
                                                <div class="product-miniature js-product-miniature" data-id-product="18" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="left-product">
                                                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                                                                <img src="https://demo.fieldthemes.com/ps_medicine/home2/82-small_default/aliquam-tincidunt-mauris.jpg" data-full-size-image-url="https://demo.fieldthemes.com/ps_medicine/home2/82-large_default/aliquam-tincidunt-mauris.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-product">
                                                        <div class="product-description">
                                                            <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/18-aliquam-tincidunt-mauris.html">Aliquam tincidunt mauris.</a></div>
                                                            <div class="product-price-and-shipping">

                                                                <span class="price">$30.39</span>

                                                            </div>
                                                        </div>
                                                        <div class="quick-view-product">
                                                            <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                                                <i class="fa fa-eye"></i> Quick view
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-inner">
                                                <div class="product-miniature js-product-miniature" data-id-product="17" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="left-product">
                                                        <a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/17-quisque-at-orci-gravid-.html" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                                                                <img src="https://demo.fieldthemes.com/ps_medicine/home2/81-small_default/quisque-at-orci-gravid-.jpg" data-full-size-image-url="https://demo.fieldthemes.com/ps_medicine/home2/81-large_default/quisque-at-orci-gravid-.jpg">
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="right-product">
                                                        <div class="product-description">
                                                            <div class="product_name"><a href="https://demo.fieldthemes.com/ps_medicine/home2/en/product-categories/17-quisque-at-orci-gravid-.html">Quisque at orci gravid,</a></div>
                                                            <div class="product-price-and-shipping">

                                                                <span class="price">$25.39</span>

                                                            </div>
                                                        </div>
                                                        <div class="quick-view-product">
                                                            <a href="javascript:void(0)" class="quick-view" data-link-action="quickview">
                                                                <i class="fa fa-eye"></i> Quick view
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="products-sort-order dropdown">
                                    <a class="select-title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Price, high to low    <i class="fa fa-angle-down"></i>
                                      </a>
                                    <div class="dropdown-menu">
                                        <a href="allproduct?page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.date_add.desc" class="select-list">
                                            Date added, newest to oldest
                                          </a>
                                        <a href="allproduct?page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.date_add.asc" class="select-list">
                                            Date added, oldest to newest
                                          </a>
                                        <a href="allproduct?page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.name.asc" class="select-list">
                                            Name, A to Z
                                          </a>
                                        <a href="allproduct?page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.name.desc" class="select-list">
                                            Name, Z to A
                                          </a>
                                        <a href="allproduct?page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.price.asc" class="select-list">
                                            Price, low to high
                                          </a>
                                        <a href="allproduct?page={{ isset($_GET['page']) ? $_GET['page'] : '' }}&filter=product.price.desc" class="select-list current">
                                            Price, high to low
                                          </a>
                                    </div>
                                </div>

                            </div>
                            <div class="total-products">
                                <p>There are 9 products.</p>
                            </div>

                        </div>

                        <div class="hidden-sm-down">

                        </div>

                        <div id="product_list_grid">

                            <div id="js-product-list">
                                <div class="products horizontal_mode">
                                    <div id="box-product-grid">
                                        <div class="row">
                                        @foreach($products as $product)
                                            <div class="item col-xs-12 col-sm-6 col-md-4">
                                                <div class="item-inner">
                                                    <div class="product-miniature js-product-miniature" data-id-product="24" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                                                        <div class="left-product" style="text-align: center;">
                                                            <a href="" class="thumbnail product-thumbnail" style="max-height: 250px;">
                                                                @if($product->images && count($product->images)>0)
                                                                    <span class="cover_image">
                                                                        <img src="{{ asset('uploads/products/'.$product->images[0]->name) }}" data-full-size-image-url="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}" >
                                                                    </span>
                                                                    <span class="hover_image">
                                                                        <img src="{{ asset('uploads/products/'.$product->images[0]->name) }}" data-full-size-image-url="{{ asset('uploads/products/'.$product->images[0]->name) }}"> 
                                                                    </span>
                                                                @else
                                                                    <span class="hover_image">
                                                                        <img src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                                                                    </span>
                                                                    <span class="cover_image">
                                                                        <img src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}">
                                                                    </span>
                                                                @endif
                                                            </a>
                                                            <div class="conditions-box">

                                                            </div>
                                                            <div class="quick-view-product">
                                                                <a href="javascript:void(0)" data-id="{{ $product->id }}" class="quick-view" title="Quick view" data-toggle="modal" data-target="#quickview-modal-18-0">
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
                                    </div>

                                </div>
                                @include('inc.model')
                                <!-- templates/_partials/pagination.tpl -->
                                <nav class="pagination">
                                    <div class="col-md-6">
                                        Showing 10-18 of 23 item(s)
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