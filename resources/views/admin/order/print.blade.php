<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}

@media print {
 .btn-success{
    display: none;
 }
}
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
                <h2>Invoice</h2><h3 class="pull-right">Order # {{ $order->id }} - {{ $order->user->name }}</h3>
    			<h2><a href="" class="btn btn-success" onclick="window.print()">Print</a></h2>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<h4>{{ trans('order.shipping_address') }}</h4>
                    <table class="">
                        <tr>
                            <td>{{ $order->shippingAddress->name }}</td>
                        </tr>
                        <tr>
                            <td>
                                {{ $order->shippingAddress->address2 }}
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $order->shippingAddress->county }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->shippingAddress->city }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->shippingAddress->postal_code }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->shippingAddress->phone }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->shippingAddress->mobile_phone }}</td>
                        </tr>
                        <tr>
                            <td>{{ $order->shippingAddress->comment }}</td>
                        </tr>
                    </table>
    			</div>
    			<div class="col-xs-6 text-right">
    				@if ($order->billingAddress)
                        <h4>{{ trans('order.billing_address') }}</h4>
                        <table style="width: 100%;text-align: right;">
                            <tr>
                                <td>{{ $order->billingAddress->name }}</td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $order->billingAddress->address2 }}
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $order->billingAddress->county }}</td>
                            </tr>
                            <tr>
                                <td>{{ $order->billingAddress->city }}</td>
                            </tr>
                            <tr>
                                <td>{{ $order->billingAddress->postal_code }}</td>
                            </tr>
                            <tr>
                                <td>{{ $order->billingAddress->phone }}</td>
                            </tr>
                            <tr>
                                <td>{{ $order->billingAddress->mobile_phone }}</td>
                            </tr>
                            <tr>
                                <td>{{ $order->billingAddress->comment }}</td>
                            </tr>
                        </table>
                    @endif
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
                                    <th>{{ trans('product.product') }}</th>
                                    <th>{{ trans('product.price') }}</th>
                                    <th>{{ trans('product.price_with_tax') }}</th>
                                    <th>{{ trans('order.quantity') }}</th>
                                    <th class="text-right">{{ trans('common.total') }}</th>
                                </tr>
    						</thead>
    						<tbody>
                                @foreach($order->products as $product)
        							<tr>
                                        <td class="vertical-align-middle">
                                            <a href="{{ route('crud.products.edit', $product->pivot->product_id) }}">{{ $product->pivot->name }}</a><br/>
                                            <span class="font-12">SKU: {{ $product->pivot->sku }}</span>
                                        </td>
                                        <td class="vertical-align-middle">{{ decimalFormat($product->pivot->price).' '.$order->currency->name }}</td>
                                        <td class="vertical-align-middle">{{ decimalFormat($product->pivot->price_with_tax).' '.$order->currency->name }}</td>
                                        <td class="vertical-align-middle">{{ $product->pivot->quantity }}</td>
                                        <td class="vertical-align-middle text-right">{{ decimalFormat($product->pivot->price_with_tax*$product->pivot->quantity).' '.$order->currency->name }}</td>
                                    </tr>
                                @endforeach
    						</tbody>
    					</table>
    				</div>
    			</div>
                <div class="col-md-6 col-md-offset-6">
                        <table class="table table-condensed">
                            <tr>
                                <td class="text-right">{{ trans('order.shipping_cost') }}:</td>
                                <td class="text-right">{{ $order->carrier->price.' '.$order->currency->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>{{ trans('common.total') }}:</strong></td>
                                <td class="text-right"><strong>{{ $order->total().' '.$order->currency->name }}</strong></td>
                            </tr>
                        </table>
                    </div>
    		</div>
    	</div>
    </div>
</div>