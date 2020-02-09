Vue.component('v-select', VueSelect.VueSelect);
Vue.component('multiselect', window.VueMultiselect.default)
const vm = new Vue({
  	el:"#vuejscom",
  	data() {
      return {
      	base_url:'aaaaaaaaaaaaaa',
      	single_purchase:0,
		purchase_receipt_info:[],
        selected1: '',
        query: "",
	    selected: "",
	    selectedCountries: [],
        countries: [],
        isLoading: false,
        expiredate: this.dateformate(new Date()),
        tp_total:0,
        vat_total:0,
        quantity:null,
        total_buy_price:null,
        unit_buy_price_purchase:null,
        exclusive_sale_price:0,
        general_sale_price:null,
        purchase_info:[],
        allworrantyproduct:[],
        totalqty:0,
        unit_buy_price:0,
        tunit_buy_price:0,
      };
    },
    methods: {
    	dateformate(date){
    		var today =date;
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();
			today = yyyy + '-' + mm + '-' + dd;
			return today;
    	},
	    submit(){
	    	var purchase_receipt_id=this.selected1.id;
	    	var self=this;
	    	this.totalqty=parseInt(this.totalqty)+parseInt(this.quantity);
	    	this.tunit_buy_price=parseInt(this.tunit_buy_price)+parseInt(this.total_buy_price);
	    	$.ajax({
	    		url: '/admin/purchaselisting/createlisting',
	    		type: 'POST',
	    		data: {purchase_receipt_id: purchase_receipt_id,product_id:this.selectedCountries.id,quantity:this.quantity,total_buy_price:this.total_buy_price,unit_buy_price_purchase:this.unit_buy_price_purchase,general_sale_price:this.general_sale_price},
	    	})
	    	.done(function(re) {
	    		if(re=='exceed'){
	    			alert("Purchase Priced Exceed Not Allow")
	    		}else{
		    		self.purchase_info[0]=re;
		    		self.general_sale_price=0;
		    		self.unit_buy_price_purchase=0;
		    		self.total_buy_price=0;
		    		self.quantity=0;
		    	}
	    	})
	    	.fail(function() {
	    		console.log("error");
	    	})
	    },
	    limitText (count) {
	      return `and ${count} other countries`
	    },
	    asyncFind (query) {
	      this.isLoading = true
	      this.countries=[];
	      var self=this;
	      $.ajax({
	      	url: '/admin/product/search/'+query,
	      })
	      .done(function(re) {
	      	self.countries = re
	        self.isLoading = false
	      })
	      .fail(function() {
	      	console.log("error");
	      })
	        self.isLoading = false

	    },
	    clearAll () {
	      this.selectedCountries = []
	    },
	    setSelected(){
	    	console.log("sdfdsf");
	    },
	    updatepurchase_info(){
	    	this.purchase_info=[];
	    	var self = this;
	    	if(this.selected1){
	    		var purchase_receipt_id=this.selected1.receipt_id;
	    	}
	    	$.ajax({
	    		url: base_url+'purchaselisting/allproductbelogntopurchase/'+purchase_receipt_id,
	    	})
	    	.done(function(re) {
	    		self.totalqty=0;
	    		self.tunit_buy_price=0;
	    		self.unit_buy_price=0;
	    		var re= jQuery.parseJSON(re);
	    		self.purchase_info.push(re);
	    		re.forEach( function(element, index) {
	    			self.totalqty= parseInt(self.totalqty) + parseInt(element.purchase_quantity);
	    			self.unit_buy_price= parseInt(self.unit_buy_price) + parseInt(element.unit_buy_price);
	    			self.tunit_buy_price= parseInt(self.tunit_buy_price) + parseInt(element.purchase_quantity*element.unit_buy_price);
	    		});
	    	})
	    	.fail(function() {
	    		console.log("error");
	    	})
	    }
  	},
  	watch:{
  		quantity: function (val) {
  		  this.quantity=parseInt(val);
	      this.total_buy_price = val;
	      this.unit_buy_price_purchase = this.total_buy_price/val;
	    },
	    total_buy_price: function (val) {
	      this.unit_buy_price_purchase = this.total_buy_price/this.quantity;
	    },
	    unit_buy_price_purchase: function (val) {
	      this.total_buy_price = this.quantity*val;
	    },
	    selected1:function(val){
	    	this.purchase_info=[];
	    	var self = this;
	    	if(this.selected1){
	    		var purchase_receipt_id=this.selected1.id;
	    	}
	    	$.ajax({
	    		url: '/admin/allproductbelogntopurchase/'+purchase_receipt_id,
	    	})
	    	.done(function(re) {
	    		self.totalqty=0;
	    		self.tunit_buy_price=0;
	    		self.unit_buy_price=0;
	    		self.purchase_info.push(re);
	    		re.forEach( function(element, index) {
	    			self.totalqty= parseInt(self.totalqty) + parseInt(element.quantity);
	    			self.unit_buy_price= parseInt(self.unit_buy_price) + parseInt(element.bp);
	    			self.tunit_buy_price= parseInt(self.tunit_buy_price) + parseInt(element.quantity*element.sp);
	    		});
	    	})
	    	.fail(function(re) {
	    		console.log(re);
	    	})
	    }
  	},
    created(){
		console.log(base_url);
		var self = this;
		$.ajax({
			url: base_url+'/admin/recepts',
		})
		.done(function(re) {
			for (var i = re.length - 1; i >= 0; i--) {
		  		self.purchase_receipt_info.push(re[i]);
		  	}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	},
	computed: {
	   
  	},
})


jQuery(document).ready(function($) {
	$('#delete_purchase_invoice').on('click', function()
	{
      var purchase_receipt_id   = $('#pur_rec_id').val();
      if(purchase_receipt_id != '')
	  {
        swal({
            title               : 'Are you sure?',
            text                : "You won't be able to revert this!",
            type                : 'warning',
            showCancelButton    : true,
            confirmButtonColor  : '#db8b0b',
            cancelButtonColor   : '#419641',
            cancelButtonText    : 'No',
            confirmButtonText   : 'Yes'
          }).then(function () {
              $.ajax({
                url       : base_url+"purchase/removeProductFromPurchase",
                type      : 'POST',
                cash      : false,
                data      : {purchase_receipt_id: purchase_receipt_id, pro_id: product_id},
                success: function(result)
                {
                  tr.closest('tr').remove();
					var total_final = 0.00;
					$('.total_purchase_price_final').each(function(){
						total_final += parseFloat($(this).text()); 
					});
					$('#total_purchase_price_new_final').html(total_final);
                  swal(
                    'Deleted!',
                    'Product has been deleted.',
                    'success'
                  );
				  
                }
              });
          })
      }
    });

   	$('#purchase_products').on('click', "[name='remove']", function(){
      var product_id            = $(this).attr('id');
      var purchase_id            = $(this).attr('purchase_id');
      var purchase_receipt_id   = $('#pur_rec_id').val();
      var tr                    = $(this);
      if(product_id != '' && purchase_receipt_id != '')
	  {
        swal({
            title               : 'Are you sure?',
            text                : "You won't be able to revert this!",
            type                : 'warning',
            showCancelButton    : true,
            confirmButtonColor  : '#db8b0b',
            cancelButtonColor   : '#419641',
            cancelButtonText    : 'No',
            confirmButtonText   : 'Yes'
          }).then(function () {
			  
              $.ajax({
                url       : base_url+"purchase/removeProductFromPurchase",
                type      : 'POST',
                cash      : false,
                data      : {purchase_receipt_id: purchase_receipt_id, pro_id: product_id,purchase_id:purchase_id},
                success: function(result)
                {	
                	var result = parseInt(result);
                	vm.updatepurchase_info();
                  	if(result==1){
	                  	swal(
		                    'Deleted!',
		                    'Product has been deleted.',
		                    'success'
	                  	);
	                }else{
	                	swal({
				            title               : 'You Can Not Delete The Items',
				            text                : "You Have Already Sale Product From This Items",
				            type                : 'warning',
				        })
	                }
                }
              });
          })
      }
    });

    $('#purchase_products').on('click', "[name='edit']", function(ev)
	{
	  var product_id            = $(this).attr('id');
      var purchase_id            = $(this).attr('purchase_id');
      var purchase_receipt_id   = $('#pur_rec_id').val();
      console.log(product_id);
      $.ajax({
      	url: base_url+'purchaselisting/find',
      	type: 'POST',
      	data: {purchaselisting_id: purchase_id},
      })
      .done(function(re) {
      	var re= jQuery.parseJSON(re);
  		$("#purchase_id").val(re.purchase_id);
  		$("#qty").val(re.purchase_quantity);
  		$("#u_b_p").val(re.unit_buy_price);
  		$("#g_b_p").val(re.general_unit_sale_price);
  		$("#e_b_p").val(re.bulk_unit_sale_price);
      })
      .fail(function() {
      	console.log("error");
      })
    });

    $('#edit_modal_form').on('submit', function(ev){
        ev.preventDefault();
        var qty             = $('#qty').val();
        var purchase_id             = $('#purchase_id').val();
        var unit_buy_price  = $('#u_b_p').val();
        var general_unit_sale_price  = $('#g_b_p').val();
        var bulk_unit_sale_price  = $('#e_b_p').val();
        if(qty != '' && qty > 0 && !isNaN(qty) && unit_buy_price !='' && unit_buy_price > 0 && !isNaN(unit_buy_price)){
            swal({
                title               : 'Are you sure?',
                text                : ":)",
                type                : 'warning',
                showCancelButton    : true,
                confirmButtonColor  : '#db8b0b',
                cancelButtonColor   : '#419641',
                confirmButtonText   : 'Yes',
                cancelButtonText    : 'No'
            }).then(function (){
                $.ajax({
                  url       : base_url+'purchaselisting/editPruchaseProduct',
                  type      : 'POST',
                  data      : {
	                            purchase_id           : purchase_id,
	                            qty                   : qty, 
	                            u_b_p                 : unit_buy_price,
	                            e_b_p                 : bulk_unit_sale_price,
	                            g_b_p                 : general_unit_sale_price,
	                          },
                  success   : function(info)
				  {	
				  	vm.updatepurchase_info();
				  	console.log(info)
                    $('#edit_modal_form').trigger("reset");
                    $('#edit_modal').modal('hide');
					var total_final = 0.00;
					$('.total_purchase_price_final').each(function(){
						total_final += parseFloat($(this).text()); 
					});
					$('#total_purchase_price_new_final').html(total_final);

                    swal(
                      'Edited!',
                      'Data has been edited.',
                      'success'
                    );
                  }
                });
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                  $('#edit_modal_form').trigger("reset");
                  $('#edit_modal').modal('hide');
                  swal(
                    'Canceled',
                    ':)',
                    'info'
                  )
                }
            })
        }
        else{
          $('#edit_modal_form').trigger("reset");
          swal(
            'Oops...!',
            'Invalid Data!!!',
            'error'
          );
        }
        /*swal*/
    });
});







// old js will delete soon
$(function () {
	$('#pro_serial_input_for_edit').on('click', "[name='edit_warran']", function(ev)
	{
		ev.preventDefault();
		var ip_id            		= $(this).attr('id');
		var product_type_name       = $('#product_type'+ip_id).val();	
			var submiturl = base_url+'purchase/update_product_warranty';
			var methods = 'POST';
			var output = '';
			var input_box='';
			var k=1;
			$.ajax(
			{
				url: submiturl,
				type: methods,
				dataType: 'JSON',
				data: {'ip_id':ip_id,'product_type_name':product_type_name},  	
				success:function(result)
				{
					swal(
						'Updated!',
						'Product has been updated.',
						'success'
					  );
					$('#product_type'+ip_id).val(result.sl_no);
				}
			});
    });

	$('#pro_serial_input_for_edit').on('click', "[name='remove_warran']", function(){
      var ip_id            = $(this).attr('id');
      var purchase_receipt_id   = $('#pur_rec_id').val();
      var tr                    = $(this);
	  var product_id     = parseInt($('#pro_hide').val());
	  var pro_hide_buy     = parseInt($('#pro_hide_buy').val());
	  //alert(ip_id);
	  //alert(purchase_receipt_id);
	 // alert(product_id);
      if(ip_id != '' && purchase_receipt_id != '' && product_id != '')
	  {
        swal({
            title               : 'Are you sure?',
            text                : "You won't be able to revert this!",
            type                : 'warning',
            showCancelButton    : true,
            confirmButtonColor  : '#db8b0b',
            cancelButtonColor   : '#419641',
            cancelButtonText    : 'No',
            confirmButtonText   : 'Yes'
          }).then(function () 
		  {
			  
              $.ajax({
                url       : base_url+"purchase/removeProductFromPurchase_warranty",
                type      : 'POST',
                cash      : false,
                data      : {purchase_receipt_id: purchase_receipt_id, ip_id: ip_id, product_id: product_id, pro_hide_buy: pro_hide_buy},
                success: function(result)
                {
					//alert(result);
					tr.closest('tr').remove();
					var total_final = 0.00;
					$('.total_purchase_price_final').each(function(){
						total_final += parseFloat($(this).text()); 
					});
					$('#total_purchase_price_new_final').html(total_final);
                  swal(
                    'Deleted!',
                    'Product has been deleted.',
                    'success'
                  );
				  
                }
              });
          })
      }

    });
  });
