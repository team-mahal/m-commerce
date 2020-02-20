@extends('layouts.app')

@section('content')
    <h2>.</h2>
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
	            <div class="card-block bg-white">
	                <h1 class="h1">My Orders</h1>
	            </div>
        		<div class="container demo">
				    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					@forelse($orders as $key => $order)
				        <div class="panel panel-default">
				            <div class="panel-heading" role="tab" id="{{ $key }}">
				                <h4 class="panel-title">
				                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne{{$key}}">
				                        <i class="more-less glyphicon glyphicon-plus"></i>
				                        Order # {{ $order->invoice_no }}
				                    </a>
				                </h4>
				            </div>
				            <div id="collapseOne{{$key}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{ $key }}">
				                <div class="panel-body">
				                    @forelse($order->products as $product)
									<div class="cart-item bg-white">
									    <div class="product-line-grid">
									        <!--  product left content: image-->
									        <div class="product-line-grid-left col-md-3 col-xs-4">
									            <span class="product-image media-middle">
										              @if($product->images && count($product->images)>0)
								                            <img  style="height: 100px;width: 100px;" src="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}" data-full-size-image-url="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}">
								                        @else
								                            <img  style="height: 100px;width: 100px;" src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}" data-full-size-image-url="{{ asset('/assets/download.png') }}">
								                        @endif
										        </span>
									        </div>

									        <!--  product left body: description -->
									        <div class="product-line-grid-body col-md-4 col-xs-8">
									            <div class="product-line-info">
									                <a class="label" href="{{ $product->route }}">
									                   {{ $product->name }}
									                </a>
									            </div>

									            <div class="product-line-info">
									                <span class="value">৳ {{ $product->pivot->price }}</span>
									            </div>
									        </div>

									        <!--  product left body: description -->
									        <div class="product-line-grid-body col-md-4 col-xs-8">
									            <p>{{ $product->pivot->quantity }}</p>
									        </div>
									    </div>
									</div>				
				                    @empty
				                    	<p>No Product Found</p>
				                    @endforelse
				                </div>
				            </div>
				        </div>
				    @empty
				    	<p>No Order Found</p>
					@endforelse
				    </div><!-- panel-group -->
				</div><!-- container -->
        	</div>
        </div>
    </div>
@endsection