<header id="header">
	<div class="header-top">
		<div class="container">
			<nav class="this-nav">
				<div class="d-flex">
					<div class="w-50">
						<a href="/">
							<img src="{{ asset('assets/omecen.png') }}" alt="" width="100px" style="padding: 10px 0px;">
						</a>
					</div>
					<div class="w-50 search" style="text-align: right;">
						<div id="search_block_top" style="float: none;">
							<div class="">
								<div class="field-search">
									<form method="get" action="https://demo.fieldthemes.com/ps_medicine/home2/en/search" id="searchbox" style="line-height: 0px;">
											<input type="hidden" name="controller" value="search" />
											<input type="hidden" name="orderby" value="position" />
											<input type="hidden" name="orderway" value="desc" />
											<input class="search_query" type="text" id="search_query_top" name="search_query" value="" placeholder="Search..." />
											<button type="submit" name="submit_search" class="btn button-search">
													<span class="icon-search"></span>
											</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		
			<!-- MEGAMENU -->
			<div id="header_menu" class="visible-lg visible-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="sticky_top" style="min-width: auto!important;right: 0px;">
								<script type="text/javascript">
									$(document).ready(function() {
											var $searchWidget = $('#search_widget');
											var $searchBox = $('#search_query_top');
											var searchURL = search_url;
											$.widget('prestashop.psBlockSearchAutocomplete', $.ui.autocomplete, {
													delay: 0,
													_renderItem: function(ul, product) {
															return $("<li>")
																	.append($("<a>")
																			.append($("<span class='left-search-ajax'>").html('<img src="' + product.images[0].bySize.small_default.url + '">'))
																			.append($("<span class='right-search-ajax'>").html('<span class="search-name-ajax">' + product.name + '</span><span class="price-search-ajax">' + (product.regular_price != product.price ? '<span class="price-regular-ajax">' + product.regular_price + '</span>' : '') + '<span class="price-ajax">' + product.price + '</span></span>'))
																	).appendTo(ul);
													}
											});
											$searchBox.psBlockSearchAutocomplete({
													delay: 0,
													source: function(query, response) {
															$.get(searchURL, {
																			s: query.term,
																			category_filter: $("#category_filter").val(),
																			resultsPerPage: 20
																	}, null, 'json')
																	.then(function(resp) {
																			response(resp.products);
																	})
																	.fail(response);
													},
													select: function(event, ui) {
															var url = ui.item.url;
															window.location.href = url;
													},
											});
									});
								</script>
								<!-- /Block search module TOP -->
								<div id="cart_block_top" class="sticky_top">
									<div class="blockcart cart-preview inactive">
										<div class="click-cart">
											<span class="unline_cart">
											<span class="cart-products-count">0</span>
											<span class="cart-item-top">Item -</span>
											<span class="cart-total-top">$0.00</span>
											</span>
											<span class="shopping-cart">
											<span class="fa fa-shopping-cart">
											</span>
											<span class="cart-products-count">0</span>
											</span>
										</div>
										<div class="cart_top_ajax">
											<div class="card-block-top" style="border-top:none">
												There are no more items in your cart
											</div>
											<div class="card-block-top">
												<div class="totals-top">
													<span class="label-top">Total (tax excl.)</span>
													<span class="value-top price">$0.00</span>
												</div>
												<div class="totals-top">
													<span class="label-top">Taxes</span>
													<span class="value-top price">$0.00</span>
												</div>
											</div>
											<div class="card-block-top">
												<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?action=show" class="view-cart">View Cart</a>
											</div>
										</div>
										<script type="text/javascript">
											$(document).ready(function() {
												$(".click-cart").click(function(e) {
													$(".cart_top_ajax").slideToggle();
													$(".click-cart").toggleClass('active');

													e.stopPropagation();
												});
												$("body").click(function(e) {
													$(".cart_top_ajax").slideUp();
													$(".click-cart").removeClass('active');
												});
											});
										</script>
									</div>
								</div>
							</div>
							<nav id="fieldmegamenu-main" class="fieldmegamenu inactive">
								<ul style="padding: 0px;">
									<li class="root root-1" style="margin-left: 0px;">
										<div class="root-item no-description">
											<a href="/ps_medicine/home2/">
												<div class="title title_font" style="padding: 0px;">
													<span class="fa menu-home"></span>
													<span class="title-text">HOME</span>
												</div>
											</a>
										</div>
									</li>
									<li class="root root-3 ">
										 <div class="root-item no-description">
											<a href="/ps_medicine/home2/en/52-shop">
												<div class="title title_font"><span class="title-text">shop</span><span class="icon-has-sub fa fa-angle-down"></span></div>
											</a>
										 </div>
										 <ul class="menu-items col-md-6 col-xs-12">
											@foreach(['',''] as $k)
													<li class="menu-item menu-item-121 depth-1 category menucol-1-3  ">
														 <div class="title title_font">
																<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/76-dresses">                                                    Dresses
																</a> 
														 </div>
														 <ul class="submenu submenu-depth-2">
																<li class="menu-item menu-item-122 depth-2 category   ">
																	 <div class="title">
																			<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/78-accessories">                                                    Accessories
																			</a> 
																	 </div>
																</li>
																<li class="menu-item menu-item-123 depth-2 category   ">
																	 <div class="title">
																			<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/79-hats-and-gloves">                                                    Hats and Gloves
																			</a> 
																	 </div>
																</li>
																<li class="menu-item menu-item-124 depth-2 category   ">
																	 <div class="title">
																			<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/80-lifestyle">                                                    Lifestyle
																			</a> 
																	 </div>
																</li>
																<li class="menu-item menu-item-125 depth-2 category   ">
																	 <div class="title">
																			<a href="https://demo.fieldthemes.com/ps_medicine/home2/en/81-bras">                                                    Bras
																			</a> 
																	 </div>
																</li>
														 </ul>
													</li>
											@endforeach
										 </ul>
									</li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
	
			@include('layouts.inc.mobilemenu');
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="bg-black">
				<div class="container">
					<div class="links">
				        <div>Checkout</div>
				        @if(!Auth::check())
				        	<div><a href="{{ url('login') }}">Log In</a></div>
				        	<div><a href="{{ url('register') }}">Register</a></div>
				        @else
				        	<div class="dropdown">
							  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    {{ Auth::user()->name }}
							  </a>

							  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
						    	<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								    Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
								    {{ csrf_field() }}
								</form>
							  </div>
							</div>
				        @endif
				    </div>
				</div>
			</div>
		</div>
	</div>
</header>