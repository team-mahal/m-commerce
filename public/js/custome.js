var image='';
function quickview(id) {
	$.ajax({
		url: base_url+'/quickview/'+id,
	})
	.done(function(re) {
		$('#quickview-modal-18-0').find('.modal-body').html(re)
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}

$('#quickview-modal-18-0').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var id= button.data('id')
   quickview(id)
})