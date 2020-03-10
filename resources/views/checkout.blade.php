@extends('layouts.app')
@section('content')
<br><br>
    <div class="container">

        <section id="content">
            <div class="row">
                <div class="col-md-8">
					@if(count($user->addresses)>0 && !isset($_GET['newaddress']))
					<form action="{{ url('placeorder') }}" method="post">
						{{ csrf_field() }}
					@endif
	                    <section id="checkout-addresses-step" class="checkout-step -reachable">
	                        <h1 class="step-title h3 bg-white p-3">
							    <i class="material-icons done"></i>
							    <span class="step-number">1</span>
							    Addresses
							  </h1>
 
 
	                        <div class="content bg-white p-3">

	                            <div class="js-address-form">
                                    <p>
                                        The selected address will be used both as your personal address (for invoice) and as your delivery address.
                                    </p>

                                    <div id="delivery-address">
                                        <div class="js-address-form">
                                        	@if(count($user->addresses)>0 && !isset($_GET['newaddress']))
                                        	<div style="display: flex;flex-wrap: wrap;">
	                                    		@foreach($user->addresses as $address)
												    <article class="address-item selected" id="id-address-delivery-address-32" style="min-width: 180px">
												        <header class="h4">
												            <label class="radio-block">
												                <span class="custom-radio">
												          <input type="radio" name="address_id" value="{{ $address->id }}" checked="">
												          <span></span>
												                </span>
												                <span class="address-alias h6">My Address</span>
												                <div class="address">{{ $address->address1 }}
												                    <br>{{ $address->address2 }}
												                    <br>{{ $address->city }}
												                    <br> {{ $address->postal_code }}
												                    <br>{{ $address->phone }} 
												                    <br>{{ $address->name }}</div>
												            </label>
												        </header>
												        <hr>
												        <footer class="address-footer">
												         {{--    <a class="edit-address text-muted">
												                <i class="material-icons edit"></i>Edit
												            </a> --}}
												            <a class="delete-address text-muted" href="{{ url('address/delete/'.$address->id) }}">
												                <i class="material-icons delete"></i>Delete
												            </a>
												        </footer>
												    </article>
												@endforeach
											</div>
												<a href="/checkout?newaddress=1"><i class="material-icons"></i>add new address</a>
										    @else
										      	<form method="POST" action="{{ url('address') }}">
												{{ csrf_field() }}
												<section class="form-fields">
	                                                <div class="form-group row">
	                                                    <label class="col-md-3 form-control-label required">
	                                                       	Name
	                                                    </label>
	                                                    <div class="col-md-6">
	                                                        <input class="form-control" name="name" type="text" value="" maxlength="32" required="">
	                                                    </div>

	                                                </div>
													<div class="form-group row">
	                                                    <label class="col-md-3 form-control-label required">
	                                                        Address1
	                                                    </label>
	                                                    <div class="col-md-6">
	                                                        <input class="form-control" name="address1" type="text" value="" maxlength="128" required="">
	                                                    </div>

	                                                </div>

	                                                <div class="form-group row">
	                                                    <label class="col-md-3 form-control-label">
	                                                        Address 2
	                                                    </label>
	                                                    <div class="col-md-6">

	                                                        <input class="form-control" name="address2" type="text" value="" maxlength="128">

	                                                    </div>

	                                                    <div class="col-md-3 form-control-comment">
	                                                        Optional
	                                                    </div>
	                                                </div>

	                                                <div class="form-group row ">
	                                                    <label class="col-md-3 form-control-label required">
	                                                        City
	                                                    </label>
	                                                    <div class="col-md-6">

	                                                        <input class="form-control" name="city" type="text" value="" maxlength="64" required="">

	                                                    </div>

	                                                    <div class="col-md-3 form-control-comment">
	                                                    </div>
	                                                </div>

	                                                <div class="form-group row ">
	                                                    <label class="col-md-3 form-control-label required">
	                                                        Zip/Postal Code
	                                                    </label>
	                                                    <div class="col-md-6">

	                                                        <input class="form-control" name="postal_code" type="text" value="" maxlength="12" required="">

	                                                    </div>

	                                                    <div class="col-md-3 form-control-comment">
	                                                    </div>
	                                                </div>

	                                                <div class="form-group row ">
	                                                    <label class="col-md-3 form-control-label required">
	                                                        Country
	                                                    </label>
	                                                    <div class="col-md-6">

	                                                        <select class="form-control form-control-select js-country" name="county" required="">
	                                                            <option value="" disabled="" selected="">-- please choose --</option>
	                                                            <option value="bangladesh" selected="">Bangladesh</option>
	                                                        </select>

	                                                    </div>

	                                                    <div class="col-md-3 form-control-comment">
	                                                    </div>
	                                                </div>

	                                                <div class="form-group row ">
	                                                    <label class="col-md-3 form-control-label">
	                                                        Phone
	                                                    </label>
	                                                    <div class="col-md-6">

	                                                        <input class="form-control" name="phone" type="text" value="" maxlength="32">

	                                                    </div>

	                                                    <div class="col-md-3 form-control-comment">
	                                                        Optional
	                                                    </div>
	                                                </div>

	                                                <div class="form-group row">
	                                                    <div class="col-md-9 col-md-offset-3">
	                                                        <input name="use_same_address" type="checkbox" value="1" checked="">
	                                                        <label>Use this address for invoice too</label>
	                                                    </div>
	                                                </div>

	                                            </section>
		                                            <footer class="form-footer clearfix">
		                                                <button type="submit" class="continue btn btn-primary pull-xs-right" value="1">
		                                                    Continue
		                                                </button>
		                                            </footer>
                                				</form>
										    @endif

                                        </div>

                                    </div>

	                            </div>

	                        </div>
	                    </section>

						<section id="checkout-delivery-step" class="checkout-step -reachable -current js-current-step"  style="margin-top: 8px">
						    <h1 class="step-title h3 bg-white p-3">
							    <i class="material-icons done"></i>
							    <span class="step-number">2</span>
							    Shipping Method
							  </h1>

						    <div class="content bg-white p-3">
						        <div class="delivery-options-list">
					                <div class="form-fields">
									@forelse($corriers as $corrier)
					                    <div class="delivery-options">
					                        <div class="delivery-option">
					                            <div class="col-sm-1">
					                                <span class="custom-radio pull-xs-left">
								                        <input type="radio" required name="corrier" id="{{ $corrier->id }}" value="{{ $corrier->id }}" checked="">
								                        <span></span>
					                                </span>
					                            </div>
					                            <label for="{{ $corrier->id }}" class="col-sm-11 delivery-option-2">
					                                <div class="row">
					                                    <div class="col-sm-5 col-xs-12">
					                                        <div class="row">
					                                            <div class="col-xs-3">
					                                            	@if($corrier->logo)
					                                                <img src="{{ $corrier->logo }}" alt="My carrier" width="20px">
					                                                @else
					                                                	<img src="/default.png" width="20px">
					                                                @endif
					                                            </div>
					                                            <div class="col-xs-9">
					                                                <span class="h6 carrier-name">{{ $corrier->name }}</span>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div class="col-sm-4 col-xs-12">
					                                        <span class="carrier-delay">{{ str_limit($corrier->delivery_text, $limit = 20, $end = '...') }}</span>
					                                    </div>
					                                    <div class="col-sm-3 col-xs-12">
					                                        <span class="carrier-price">৳{{ $corrier->price }}</span>
					                                    </div>
					                                </div>
					                            </label>
					                            <div class="col-md-12 carrier-extra-content">

					                            </div>
					                            <div class="clearfix"></div>
					                        </div>
					                    </div>
					                @empty
										<p>Empty</p>
					                @endforelse

					                    <div class="order-options">
					                    </div>
					                </div>
						        </div>
						    </div>
						</section>

						<section id="checkout-payment-step" class="checkout-step -current -reachable js-current-step" style="margin-top: 8px">
						    <h1 class="step-title h3 bg-white p-3">
							    <i class="material-icons done"></i>
							    <span class="step-number">3</span>
							    Payment
							</h1>

						    <div class="content bg-white p-3">

						        <div class="payment-options">
						        	@forelse($PaymentMethods as $PaymentMethod)
							            <div>
							                <div id="payment-option-1-container" class="payment-option clearfix">

							                    <span class="custom-radio pull-xs-left">
							              <input class="ps-shown-by-js " id="payment-option-{{ $PaymentMethod->id }}" value="{{ $PaymentMethod->id }}" name="paymentmethod" type="radio" required="">
							              <span></span>
							                    </span>

							                    <label for="payment-option-{{ $PaymentMethod->id }}">
							                        <span>{{ $PaymentMethod->name }}</span>
							                    </label>

							                </div>
							            </div>
						           	@empty
						           		<p>Empty</p>
						           	@endforelse
						        </div>

						        <div id="payment-confirmation">
						            <div class="ps-shown-by-js">
						                <button type="submit" class="btn btn-primary center-block">
						                    Order with an obligation to pay
						                </button>
						            </div>
						        </div>
						    </div>
						</section>
						<br><br>
					</form>
                </div>

                <div class="col-md-4">

                    <section id="js-checkout-summary" class="card js-cart" data-refresh-url="https://demo.fieldthemes.com/ps_medicine/home2/en/cart?ajax=1">

			            <div class="cart-detailed-totals">

			                <div class="card-block">
			                    <div class="cart-summary-line" id="cart-subtotal-products">
			                        <span class="label js-subtotal">
			                            {{ \Cart::content()->count() }} items
			                        </span>
			                        <span class="value">৳{{ \Cart::subtotal() }}</span>
			                    </div>
			                </div>

			                <hr>

			                <div class="card-block">
			                    <div class="cart-summary-line">
			                        <small class="label">Taxes</small>
			                        <small class="value">৳{{ \Cart::tax() }}</small>
			                    </div>
			                    <div class="cart-summary-line cart-total">
			                        <span class="label">Total (tax excl.)</span>
			                        <span class="value">৳{{ \Cart::total() }}</span>
			                    </div>
			                   
			                </div>

			                <hr>
			            </div>
                    </section>

                    <div id="block-reassurance">
                        <ul>
                            <li>
                                <div class="block-reassurance-item">
                                    <img src="https://demo.fieldthemes.com/ps_medicine/home2/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with module Customer reassurance)">
                                    <span class="h6">Security policy (edit with module Customer reassurance)</span>
                                </div>
                            </li>
                            <li>
                                <div class="block-reassurance-item">
                                    <img src="/default.png" width="20px">
                                    <span class="h6">Delivery policy (edit with module Customer reassurance)</span>
                                </div>
                            </li>
                            <li>
                                <div class="block-reassurance-item">
                                    <img src="https://demo.fieldthemes.com/ps_medicine/home2/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with module Customer reassurance)">
                                    <span class="h6">Return policy (edit with module Customer reassurance)</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

    </div>

@endsection