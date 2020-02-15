<div>
<div class="click-cart">
	<span class="unline_cart">
	<span class="cart-products-count">{{ \Cart::content()->count() }}</span>
	<span class="cart-item-top">Items -</span>
	<span class="cart-total-top">৳ {{ \Cart::subtotal() }}</span>
	</span>
	<span class="shopping-cart">
	<span class="fa fa-shopping-cart">
	</span>
	<span class="cart-products-count">0</span>
	</span>
</div>
<div class="cart_top_ajax">
	@if(\Cart::count()==0)
		<div class="card-block-top" style="border-top:none">
			There are no more items in your cart
		</div>
	@else
	@foreach(Cart::content() as $row)
		<div class="box-item">
		    <div class="cart-item-product">
		        <a class="cart-item-product-left" href="#">
					@if($row->options['image'])
		            	<img class="img-responsive" src="{{ asset('uploads/products/'.$row->options['image']) }}" alt="Quisque at orci gravid,">
		            @else
		            	<img class="img-responsive" src="{{ asset('/assets/download.png') }}" alt="Quisque at orci gravid,">
		            @endif
		        </a>
		        <div class="cart-item-product-right">
		            <div class="product-name-ajax">
		                <span class="qtt-ajax">{{ $row->qty }} x </span><a href="#">{{ $row->name }}</a>
		            </div>
		            <div class="product-line-info-top">
		                <span class="value price">৳{{ $row->qty*$row->price }}</span>
		            </div>
		        </div>
		        <a href="#" onclick="remove('{{ $row->rowId }}')">
		            <i class="fa fa-times-circle"></i>
		        </a>
		    </div>
		</div>
	@endforeach
	@endif
	<div class="card-block-top">
		<div class="totals-top">
			<span class="label-top">Sub Total (tax excl.)</span>
			<span class="value-top price">৳ {{ Cart::subtotal() }}</span>
		</div>
		<div class="totals-top">
			<span class="label-top">Taxes</span>
			<span class="value-top price">৳ {{ Cart::tax() }}</span>
		</div>
		<div class="totals-top">
			<span class="label-top">Total</span>
			<span class="value-top price">৳ {{ Cart::total() }}</span>
		</div>
	</div>
	<div class="card-block-top">
		<a href="{{ url('cart') }}" class="view-cart">View Cart</a>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$(".click-cart").click(function(e) {
		$(".cart_top_ajax").slideToggle();
		$(".click-cart").toggleClass('active');
		e.stopPropagation();
	});

	$(document).mouseup(function(e) 
	{
	    var container = $("#cartapppend");
	    // if the target of the click isn't the container nor a descendant of the container
	    if (!container.is(e.target) && container.has(e.target).length === 0) 
	    {
	       	$(".cart_top_ajax").slideUp();
			$(".click-cart").removeClass('active');
	    }
	});
});
</script>
</div>
