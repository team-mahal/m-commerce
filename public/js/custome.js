
function quickview(id) {
	$.ajax({
		url: base_url+'/quickview/'+id,
	})
	.done(function(re) {
		console.log(re);
		$("#quickview-modal-18-0").css('display', 'block');
		$(".modal-backdrop").css('display', 'block');
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}

jQuery(document).ready(function($) {
	$('.close').click(function(event) {
		$("#quickview-modal-18-0").css('display', 'none');
		$("#modal-backdrop").css('display', 'none');
	});
});
