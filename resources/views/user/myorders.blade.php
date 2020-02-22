@extends('layouts.app')

@section('content')
    <h2>.</h2>
	<div class="container">
    	<div class="card p-3">
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
					                	<table class="table table-bordered bg-white">
					                		<tr>
					                			<th>SL</th>
					                			<th>Image</th>
					                			<th>Name</th>
					                			<th>Quantity</th>
					                			<th>Price</th>
					                		</tr>
						                    @forelse($order->products as $key => $product)
						                    <tr>
					                			<td>{{ $key+1 }}</td>
					                			<td>
					                				<span class="product-image media-middle">
					                                    @if($product->images && count($product->images)>0)
				                                            <img  style="height: 100px;width: 100px;" src="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}" data-full-size-image-url="{{ asset('uploads/products/'.$product->images[0]->name) }}" alt="{{ $product->name }}">
				                                        @else
				                                            <img  style="height: 100px;width: 100px;" src="{{ asset('/assets/download.png') }}" alt="{{ $product->name }}" data-full-size-image-url="{{ asset('/assets/download.png') }}">
				                                        @endif
						                            </span>
					                			</td>
					                			<td>
					                				<a class="label" href="{{ $product->route }}">
					                                    {{ $product->name }}
					                                </a>
					                            </td>
					                			<td> <p>{{ $product->pivot->quantity }}</p></td>
					                			<td><span class="value">৳ {{ $product->pivot->price }}</span></td>
					                		</tr>
							
						                    @empty
						                    	<p>No Product Found</p>
						                    @endforelse
											<tr>
												<td colspan="4"></td>
												<td>Total:৳{{ $order->total }}.00</td>
											</tr>
					                  	</table>
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
	</div>
@endsection