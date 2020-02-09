@extends('backpack::layout')

@section('content-header')
	
@endsection

@section('content')
<section id="vuejscom" class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border text-center">
                    <h32 class="box-title font-weight-bold">Purchase Listing
                    </h32>
                </div>
                <div class="box-body">
                    <table class="table table-bordered reduce_space">
                        <tbody>
                            <tr>
                                <td width="25%"><b>Select Receipt</b></td>
                                <td colspan="3">
									<div>
										<div>
										  <multiselect 
			            				  v-model="selected1" 
			            				  id="ajax" 
			            				  label="id" 
			            				  track-by="id"
			            				  placeholder="Type to search Receipt" 
			            				  open-direction="bottom" 
			            				  :options="purchase_receipt_info" 
			            				  :searchable="true" 
			            				  :loading="isLoading" 
			            				  :internal-search="true" 
			            				  :clear-on-select="false" 
			            				  :close-on-select="true" :options-limit="300" :limit="3" :limit-text="limitText" :max-height="600" :show-no-results="false" :hide-selected="false">
										    <template slot="tag" slot-scope="{ option, remove }">
								    			<span class="option__title" style="display: flex;">
									      			@{{  props.option.supplier.name }} ( @{{ (props.option.id) }} )
									      			<br> 
												</span>
										    </template>
										    <template slot="option" slot-scope="props">
										      	<div class="option__desc">
										      		<span class="option__title" style="display: flex;">
										      			@{{  props.option.supplier.name }} ( @{{ (props.option.id) }} )
										      			<br> 
													</span>
										      	</div>
										    </template>
										    <span slot="noResult">Oops! No elements found. Consider changing the search query.</span>
										  </multiselect>
										</div>
									</div>
    							</td>
    						</tr>
    					</tbody>
    				</table>
				    <table class="table table-bordered purchace">
			    		<tbody id="general_info" v-if="selected1">
							<tr>
		            			<td><b>Supplier Name</b></td>
		            			<td colspan="3">
		            				@{{ selected1.supplier.name }}
		            			</td>
		            		</tr>
		            		<tr>
		            			<td><b>Receipt ID</b></td>
		            			<td id="receiptid">
		            				@{{ selected1.id }}
		            			</td>
		            			<td>
		            				<b>Purchase Date</b>
		            			</td>
		            			<td>
		            				@{{ selected1.created_at }}
		            			</td>
		            		</tr>
		            		<tr>
		            			<td><b>Purchase Price</b></td>
		            			<td>
		            				@{{ selected1.amount }}
		            			</td>
		            			<td><b>Paid</b></td>
		            			<td>
		            				@{{ selected1.paid }}
		            			</td>
		            		</tr>
		            	</tbody>
				        <tbody id="general_info" v-else>
				            <tr>
				                <td><b>Supplier Name</b></td>
				                <td colspan="3"></td>
				            </tr>
				            <tr>
				                <td><b>Receipt ID</b></td>
				                <td id="receiptid"></td>
				                <td><b>Purchase Date</b></td>
				                <td></td>
				            </tr>
				            <tr>
				                <td><b>Purchase Price</b></td>
				                <td></td>
				                <td><b>Paid</b></td>
				                <td></td>
				            </tr>
				        </tbody>
				    </table>
				    <div class="row">
				    	<br>
						<div class="col-sm-12">
							<div>
							  <multiselect v-model="selectedCountries" id="ajax" label="name" track-by="name" placeholder="search product by name" open-direction="bottom" :options="countries" :searchable="true" :loading="isLoading" :internal-search="false" :clear-on-select="false" :close-on-select="true" :options-limit="300" :limit="3" :limit-text="limitText" :max-height="600" :show-no-results="false" :hide-selected="false" @search-change="asyncFind">
							    <template slot="tag" slot-scope="{ option, remove }">
							    	<span class="custom__tag"><span>@{{ option.name }}</span>
							    	<span class="custom__remove" @click="remove(option)">❌</span></span>
							    </template>
							    <template slot="clear" slot-scope="props">
							      <div class="multiselect__clear" v-if="selectedCountries && selectedCountries.length" @mousedown.prevent.stop="clearAll(props.search)"></div>
							    </template>
							    <span slot="noResult">Oops! No elements found. Consider changing the search query.</span>
							  </multiselect>
							</div>
						</div>
				    </div>
				    <input type="hidden" id="">
				    <br>
				    <form id="product_listing_form">
			              	<table class="table table-bordered reduce_space">
			              		<tbody>
			              			<tr>
			              				<td>
			              					<b>Quantity:</b>
			              				</td>
			              				<td>
			              					<input type="" class="form-control custom_form_control quantity" v-model="quantity" id="quantity" name="" placeholder="Ex: 10" autocomplete="off" required>
			              				</td>
			              				<td style="vertical-align: middle;">
			              					Unit Buy Price:
			              				</td>
			              				<td>
			              					<input type="" class="form-control custom_form_control" v-model="unit_buy_price_purchase" style="text-align: right;" placeholder="Ex: 10" autocomplete="off">
			              				</td>
			              			</tr>
			              			<tr>
			              				<td style="vertical-align: middle;">
			              					Total Buy Price:
			              				</td>
			              				<td>
			              					<input  class="form-control custom_form_control total_buy_price" v-model="total_buy_price" style="text-align: right;">
			              				</td >
			              				<td style="vertical-align: middle;">Sale Price:</td>
			              				<td style="text-align: right;">
			              					<input type="" class="form-control custom_form_control" v-model="general_sale_price" style="text-align: right;" placeholder="Ex: 15" autocomplete="off" required>
			              				</td>
			              			</tr>
			              		</tbody>
			              	</table>
							<div class="box-footer" style="background: #0f77ab;">
								<center>
									<div class="col-sm-22">
										<button v-if="(selectedCountries && selected1 && selectedCountries.id && quantity && general_sale_price)" type="button" @click="submit" class="btn btn-success btn-sm" name="search_random" id="submit"><i class="fa fa-fw fa-save"></i> Create</button>
										<button v-else type="button" @click="submit" class="btn btn-success btn-sm" name="search_random" id="submit" disabled><i class="fa fa-fw fa-save"></i> Create</button>
										<button type="reset" id="reset" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-refresh"></i> Reset</button>
										<button type="button" id="delete_purchase_invoice" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Delete</button>
									</div>
								</center>
							</div>
		              	</form>
    			</div>
    		</div>
    	</div>

   		<div class="col-md-6" style="padding: 0px;">
	        <div class="box">
	            <div class="box-body">
		            <div class="wrap">
		            	<input type="hidden" name="" id="pur_rec_id" :value="selected1.id">
						<table class="table" id="purchase_products">
							<tr style="background-color: #2aabd2; color: white;">
								<td style="width: 4%;">No</td>
								<td style="width: 6%;">Pr. ID</td>
								<td style="text-align: left; width: 35%;">Product Name</td>
								<td style="text-align: center; width: 6%;">Qnt.</td>
								<td style="text-align: center;width: 10%;">U.BP</td>
								<td style="text-align: center; width: 10%;">TP.</td>
								<td style="text-align: center; width: 7%;" ><i class="fa fa-edit"></i></td>
							</tr>
							<tr v-for="(p,index) in purchase_info[0]">
								<td style="width: 4%;">@{{ index+1 }}</td>
								<td style="width: 6%;">@{{ p.id }}</td>
								<td style="width: 35%;">@{{ p.product.name }}</td>
								<td style="text-align: center; width: 6%;">@{{ p.quantity }}</td>
								<td style="text-align: center;width: 10%;">@{{ p.bp }}</td>
								<td style="text-align: center;width: 10%;">@{{ p.quantity*p.sp }}</td>
								<td style="text-align: center;width: 6%;">
								  <i
								  	data-toggle="modal" data-target="#edit_modal" 
								    class="fa fa-fw fa-edit css_for_cursor"
								    style="color: #db8b0b; "
								    name="edit"
								    title="Edit"
								    :id="p.product_id"
								    :purchase_id="p.id"
								  ></i>
								  <i
								    class="fa fa-fw fa-remove css_for_cursor"
								    style="color: red; "
								    :id="p.product_id"
								    :purchase_id="p.purchase_id"
								    name="remove"
								    title="Remove"
								  ></i>
								</td>
							</tr>
							<tr style="background-color: #2aabd2; color: white;">
								<td style="width: 4%;"></td>
								<td style="width: 6%;"></td>
								<td style="width: 35%;text-align: right;">Total</td>
								<td style="width: 6%;text-align: center;">@{{ totalqty }}</td>
								<td style="text-align: center; width: 10%;"></td>
								<td style="text-align: center;width: 10%;">@{{ tunit_buy_price }}</td>
								<td style="text-align: center; width: 7%;" ></td>
							</tr>	
						</table>
					</div>
	            </div>
	        </div>
	    </div>

	    <div id="edit_modal" class="modal">
	        <div class="modal-dialog" style="width: 60%;">
	            <form id="edit_modal_form" class="form-horizontal">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	                        <h4 class="modal-title"><span class="glyphicon glyphicon-edit" style="color: rgb(219, 139, 11);"></span>
				                	Edit
				                </h4></div>
	                    <div class="modal-body">
	                        <input type="hidden" name="purchase_id" id="purchase_id" placeholder="Ex: 100" required="required" autocomplete="off" class="form-control" style="text-align: right;">
	                        <table class="table table-bordered serial_qnt_price">
	                            <tbody>
	                                <tr>
	                                    <td style="vertical-align: middle;">Quantity: </td>
	                                    <td>
	                                        <input type="text" id="qty" name="qty" placeholder="Ex: 100" required="required" autocomplete="off" class="form-control" style="text-align: right;">
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td style="vertical-align: middle;">Unit Buy Price: </td>
	                                    <td>
	                                        <input type="text" id="u_b_p" name="u_b_p" placeholder="Ex: 10" required="required" autocomplete="off" class="form-control" style="text-align: right;">
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td style="vertical-align: middle;"> General Sale Price: </td>
	                                    <td>
	                                        <input type="text" id="g_b_p" name="u_b_p" placeholder="Ex: 10" required="required" autocomplete="off" class="form-control" style="text-align: right;">
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td style="vertical-align: middle;">Exclusive Sale Price: </td>
	                                    <td>
	                                        <input type="text" id="e_b_p" name="u_b_p" placeholder="Ex: 10" required="required" autocomplete="off" class="form-control" style="text-align: right;">
	                                    </td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                    <div class="modal-footer">
	                        <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
	                        <input type="submit" id="save_change" value="Save" class="btn btn-info">
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
    </div>
</section>
@endsection


@section('after_styles')
	
@endsection

@section('after_scripts')
<script>
	var base_url = "{{ url('') }}"
</script>
  <script src="{{ asset('vue/vue.min.js') }}"></script>
  <script src="https://unpkg.com/vue-select@3.0.0"></script>
  <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
  <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
  <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">
  <script src="{{ asset('vue/purchaselisting.js') }}"></script>
@endsection