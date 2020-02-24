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
									<input class="search_query basicAutoComplete" type="text" id="search_query_top" name="search_query" value="" placeholder="Search..." />
									<button type="submit" name="submit_search" class="btn button-search">
										<span class="icon-search"></span>
									</button>
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
								<!-- /Block search module TOP -->
								<div id="cart_block_top" class="sticky_top">
									<div class="blockcart cart-preview inactive">
										<div>
											<div class="click-cart">
												<span class="unline_cart">
												<span id="counttotalitem" class="cart-products-count">{{ \Cart::content()->count() }}</span>
												<span class="cart-item-top">Items -</span>
												<span id="counttotalprice" class="cart-total-top">৳ {{ \Cart::subtotal() }}</span>
												</span>
												<span class="shopping-cart">
												<span class="fa fa-shopping-cart">
												</span>
												<span class="cart-products-count">0</span>
												</span>
											</div>
											<div class="cart_top_ajax">
												<div id="cartapppend">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<nav id="fieldmegamenu-main" class="fieldmegamenu inactive">
								<ul style="padding: 0px;">
									<li class="root root-1" style="margin-left: 0px;">
										<div class="root-item no-description">
											<a href="/">
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
	
			@include('layouts.inc.mobilemenu')
		</div>
	</div>
	<div style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-black">
						<div class="links">
					        @if(!Auth::check())
					        	<div><a href="{{ url('login') }}">Log In</a></div>
					        	<div><a href="{{ url('register') }}">Register</a></div>
					        @else
					        	<div class="dropdown hovereffect">
								  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    {{ Auth::user()->name }}
								  </a>

								  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								    <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
								    <a class="dropdown-item" href="{{ url('myorders') }}">Orders</a>
								    <a class="dropdown-item" href="{{ url('testimonial') }}">Testimonial</a>
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
	</div>
</header>