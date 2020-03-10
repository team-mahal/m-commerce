<header id="header">
	<div class="top-header" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-black">
						<div class="links">
							<div><a href="{{ url('login') }}">Wish List</a></div>
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
	<div class="header-top">
		<div class="container">
			<nav class="this-nav">

				<div class="d-flex align-items-center ">

					<div style="width: 145px">
						<a href="/">
							<img src="{{ asset('assets/omecen.png') }}" alt="" width="100px" style="padding: 10px 0px;">
						</a>
					</div>
					
					<div class="" style="text-align: right;">
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
					<div class="center-content">
						<div class="row">
							<div class="col-md-12">
								<div class="bg-white">
									<div class="links">
								        <div><a href="{{ url('login') }}">Wish List</a></div>
								        @if(!Auth::check())
								        	<div><a href="{{ url('login') }}">Log In</a></div>
								        	<div><a href="{{ url('register') }}">Register</a></div>
								        @else
								        	<div class="dropdown hovereffect">
											  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    {{ Auth::user()->name }}
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											    <a class="dropdown-item p-3" href="{{ url('profile') }}">Profile</a>
											    <a class="dropdown-item p-3" href="{{ url('myorders') }}">Orders</a>
											    <a class="dropdown-item p-3" href="{{ url('testimonial') }}">Testimonial</a>
										    	<a class="dropdown-item p-3" href="{{ route('logout') }}"
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
			</nav>
		</div>
		<div style="background-color: #86bd3d;">
			<!-- MEGAMENU -->
			<div class="container">
				<div id="header_menu" class="visible-lg visible-md">
					<div class="container">
						<div class="row">
						<div class="col-md-12">
							<nav id="fieldmegamenu-main" class="fieldmegamenu inactive">
								<ul style="padding: 0px;">
									<li class="root root-1" style="margin-left: 0px;">
										<div class="root-item no-description">
											<a href="/">
												<span class=""><svg aria-hidden="true" style="color: #fff;height: 20px;width: 20px;" focusable="false" data-prefix="far" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-home fa-w-18 fa-5x"><path fill="currentColor" d="M570.24 247.41L512 199.52V104a8 8 0 0 0-8-8h-32a8 8 0 0 0-7.95 7.88v56.22L323.87 45a56.06 56.06 0 0 0-71.74 0L5.76 247.41a16 16 0 0 0-2 22.54L14 282.25a16 16 0 0 0 22.53 2L64 261.69V448a32.09 32.09 0 0 0 32 32h128a32.09 32.09 0 0 0 32-32V344h64v104a32.09 32.09 0 0 0 32 32h128a32.07 32.07 0 0 0 32-31.76V261.67l27.53 22.62a16 16 0 0 0 22.53-2L572.29 270a16 16 0 0 0-2.05-22.59zM463.85 432H368V328a32.09 32.09 0 0 0-32-32h-96a32.09 32.09 0 0 0-32 32v104h-96V222.27L288 77.65l176 144.56z" class=""></path></svg></span>
											</a>
										</div>
									</li>
									@forelse($categories as $key => $category)
									<?php
										if($key==6)break;
									?>
										<li class="root root-3 ">
											 <div class="root-item no-description">
												<a href="{{ url('category/'.$category->id) }}">
													<div class="title title_font">
														<span class="">{{ $category->name }}</span>
														<span class="icon-has-sub fa fa-angle-down"></span>
													</div>
												</a>
											 </div>
											 @if(count($category->children)>0)
											 <ul class="menu-items col-md-6 col-xs-12">
												@foreach($category->children as $children)
													<li class="menu-item menu-item-121 depth-1 category menucol-1-3  ">
														 <div class="title title_font">
															<a href="{{ url('category/'.$children->id) }}">
																{{ $children->name }}
															</a> 
														 </div> 
														@if(count($children->children)>0)
															 <ul class="submenu submenu-depth-2">
															 	@foreach($children->children as $child)
																	<li class="menu-item menu-item-122 depth-2 category   ">
																	 <div class="title">
																		<a href="{{ url('category/'.$child->id) }}">
																			{{ $child->name }}
																		</a> 
																	 </div>
																	</li>
																@endforeach
															 </ul>
														@endif
													</li>
				                                @endforeach
											 </ul>
											 @endif
										</li>
									@empty
			                         -
			                        @endforelse
			                       	<li class="root root-3">
									    <div class="root-item no-description">
								            <div class="title title_font">
								                <span class="">Pages</span>
								                <span class="icon-has-sub fa fa-angle-down"></span>
								            </div>
									    </div>
									    <ul class="menu-items col-md-3 col-xs-3">
									        <li style="display: block;width: 100%;padding: 10px;">
									            <div class="title title_font">
									                <a href="{{ url('brand') }}">
														By Brand Name
													</a>
									            </div>
									        </li>
									        <li style="display: block;width: 100%;padding: 10px;">
									            <div class="title title_font">
									                <a href="{{ url('generic') }}">
														By Generic Name
													</a>
									            </div>
									        </li>
									        <li style="display: block;width: 100%;padding: 10px;">
									            <div class="title title_font">
									                <a href="{{ url('contacus') }}">
														Contact Us
													</a>
									            </div>
									        </li>
									    </ul>
									</li>
								</ul>
							</nav>

						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	
			@include('layouts.inc.mobilemenu')
	</div>
</header>


