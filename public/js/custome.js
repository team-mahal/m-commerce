jQuery(document).ready(function($) {
		$('.basicAutoComplete').autoComplete({
		resolver: 'custom',
		minLength: 1,
			formatResult: function (item) {
					return {
							value: item.name,
							text:  item.name,
							html: [

								`<div class="media" data-link='`+item.link+`'>
									<div class="media-body">
										<p style="padding:20px 20px;">`+item.name+`</p>
										<p style="padding:10px 20px;">`+item.price+`৳</p>
									</div>
								</div>`
						
							] 
					};
			},
			events: {
					search: function (qry, callback) {
							// let's do a custom ajax call
							$.ajax(
									window.base_url+'/search',
									{
										data: { 
											qry: qry,
											cat_id : $('#top-search-category').val()
										},
											dataType : 'json',
											type: 'GET',
									}
							).done(function (res) {
					callback(res.results);

					setTimeout(function(){ 
						console.log('sdsds');

						$('.bootstrap-autocomplete.dropdown-menu').append(
							`<li style="text-align: center;padding: 24px;"><a style="color:#86BD3D;" class=' sugg-link' href='`+res.suggLink+`' >View All (`+res.resultscount+`)</a></li>`
						);
					}, 300);

					$('.bootstrap-autocomplete.dropdown-menu li').click(function (){
						var ref = $(this);
						setTimeout(function(){ 
							var link = ref.find('.media').data('link');
							window.location.href = link;
						}, 300);
					});
							});
					}
			}
		});
		$("#dropdown-hander").click(function(event) {
			var abv= $(this).find('.dropdown-menu').toggleClass('d-block');
		});
		$('.click-cart').click(function(event) {

				$('.cart_top_ajax').toggleClass('d-block');

		});
});

$(document).ready(function() {
	$(document).mouseup(function(e) 
	{
	    var container = $("#cartapppend");
	    // if the target of the click isn't the container nor a descendant of the container
	    if (!container.is(e.target) && container.has(e.target).length === 0) 
	    {
	       	// $(".cart_top_ajax").slideUp();
	       	// $(".cart_top_ajax").removeClass('d-block');
	    }
	});
});

// search
jQuery(document).ready(function($) {
		$('.basicAutoComplete').autoComplete({
		resolver: 'custom',
		minLength: 1,
			formatResult: function (item) {
					return {
							value: item.name,
							text:  item.name,
							html: [

								`<div class="media" data-link='`+item.link+`'>
									<div class="media-body">
										<p style="padding:20px 20px;">`+item.name+`</p>
										<p style="padding:10px 20px;">`+item.price+`৳</p>
									</div>
								</div>`
						
							] 
					};
			},
			events: {
					search: function (qry, callback) {
							// let's do a custom ajax call
							$.ajax(
									window.base_url+'/search',
									{
										data: { 
											qry: qry,
											cat_id : $('#top-search-category').val()
										},
											dataType : 'json',
											type: 'GET',
									}
							).done(function (res) {
					callback(res.results);

					setTimeout(function(){ 
						console.log('sdsds');

						$('.bootstrap-autocomplete.dropdown-menu').append(
							`<li style="text-align: center;padding: 24px;"><a style="color:#86BD3D;" class=' sugg-link' href='`+res.suggLink+`' >View All (`+res.resultscount+`)</a></li>`
						);
					}, 300);

					$('.bootstrap-autocomplete.dropdown-menu li').click(function (){
						var ref = $(this);
						setTimeout(function(){ 
							var link = ref.find('.media').data('link');
							window.location.href = link;
						}, 300);
					});
							});
					}
			}
		});

});


function toggleIcon(e) {
		$(e.target)
				.prev('.panel-heading')
				.find(".more-less")
				.toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);


function cart(id) {
		var quantity = $("#quantity_wanted").val()
		$.ajax({
			type: 'GET',
			url: base_url+'/addtocart/'+id,
			data:{quantity:quantity}
		})
		.done(function(re) {
			$('#cartapppend').html(re)
			$('#counttotalprice').html($('#pricetotal').html());
			$('#counttotalitem').html($('#itemtotal').val());
		})
		.fail(function() {
				console.log("error");
		})
		.always(function() {
				console.log("complete");
		});
}

function remove(id) {
	$.ajax({
		type: 'GET',
		url: base_url+'/remove/'+id,
	})
	.done(function(re) {
		$('#cartapppend').html(re)
		$('#counttotalprice').html($('#pricetotal').html());
		$('#counttotalitem').html($('#itemtotal').val());
		
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
			console.log("complete");
	});
	if(id!=1){
		removebigcart(1);
	}
}

function removebigcart(id) {
	$.ajax({
		type: 'GET',
		url: base_url+'/removebigcart/'+id,
	})
	.done(function(re) {
		$('.bigcartapppend').html(re)
		
	})
	.fail(function() {
			console.log("error");
	})
	.always(function() {
			console.log("complete");
	});
	if(id!=1){
		remove(1)
	}
}

function updateqty(qty,id) {

	$.ajax({
		type: 'GET',
		url: base_url+'/addtocart1/'+id,
		data:{quantity:qty}
	})
	.done(function(re) {
		$('.bigcartapppend').html(re)
	})
	.fail(function() {
			console.log("error");
	})
	.always(function() {
			console.log("complete");
	});

	console.log(qty);
}


jQuery(document).ready(function($) {
		$.ajax({
				url: base_url+'/addtocart/',
		})
		.done(function(re) {
				$('#cartapppend').html(re)
		})
		.fail(function() {
				console.log("error");
		})
		.always(function() {
				console.log("complete");
		});
});


var image='';
function quickview(id) {
	 console.log('test');
	$.ajax({
		url: base_url+'/quickview/'+id,
	})
	.done(function(re) {
		$('#quickview-modal-18-0').find('.modal-body').html(re)
		window.Sharer.init();
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}

$('.quick-view').on('click', function (event) {
	// event.preventDefault();
	$('#quickview-modal-18-0').show()
	$('#modelbackdoe').show();
	var button = $(this).attr('data-id')
	console.log(button);
	var id= button
	quickview(id)
})

function hidethismodel() {
 	$('#quickview-modal-18-0').hide();
	$('#modelbackdoe').hide();
}

$('.owl-carousel-feature').owlCarousel({
	loop:true,
	margin:5,
	nav:true,
	items:3,
	responsiveClass:true,
	responsive:{
		0:{
				items:1,
		},
		600:{
				items:2,
		},
		1000:{
				items:3,
		},
		1400:{
				items:4,
		},
		2000:{
				items:5,
		}
	}
})

$.fn.extend({
	treed: function (o) {

			var openedClass = 'glyphicon-minus-sign';
			var closedClass = 'glyphicon-plus-sign';

			if (typeof o != 'undefined'){
					if (typeof o.openedClass != 'undefined'){
							openedClass = o.openedClass;
					}
					if (typeof o.closedClass != 'undefined'){
							closedClass = o.closedClass;
					}
			};

			//initialize each of the top levels
			var tree = $(this);
			tree.addClass("tree");
			tree.find('li').has("ul").each(function () {
					var branch = $(this); //li with children ul
					branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
					branch.addClass('branch');
					branch.on('click', function (e) {
							if (this == e.target) {
									var icon = $(this).children('i:first');
									icon.toggleClass(openedClass + " " + closedClass);
									$(this).children().children().toggle();
							}
					})
					branch.children().children().toggle();
			});
			//fire event from the dynamically added icon
			tree.find('.branch .indicator').each(function(){
					$(this).on('click', function () {
							$(this).closest('li').click();
					});
			});
			//fire event to open branch if the li contains an anchor instead of text
			tree.find('.branch>a').each(function () {
					$(this).on('click', function (e) {
							$(this).closest('li').click();
							e.preventDefault();
					});
			});
			//fire event to open branch if the li contains a button instead of text
			tree.find('.branch>button').each(function () {
					$(this).on('click', function (e) {
							$(this).closest('li').click();
							e.preventDefault();
					});
			});
	}
})

//Initialization of treeviews
$('#tree1').treed();

$('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});
