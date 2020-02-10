<?php

Route::get('/', 'HomeController@index');

Route::get('/productdetails', 'HomeController@productdetails');
Route::get('/allproduct', 'HomeController@allproduct');

	
// blog
Route::get('/blogs', 'BlogController@index');
Route::get('/post/{id}', 'BlogController@post');



// concentric-olive-wheavb1hbty7lmjqf80jn0wz.herokudns.com









Auth::routes();
// Admin Interface
Route::group(['middleware' => ['admin','isadmin'],
			  'prefix'     => 'admin',
              'namespace'  => 'Admin'
], function () {
	Route::get('dashboard', 'DashboardController@dashboard');
	CRUD::resource('categories', 'CategoryCrudController');
	CRUD::resource('currencies', 'CurrencyCrudController');
	CRUD::resource('carriers', 'CarrierCrudController');
	CRUD::resource('attributes', 'AttributeCrudController');
	CRUD::resource('attributes-sets', 'AttributeSetCrudController');
	CRUD::resource('products', 'ProductCrudController');
	CRUD::resource('taxes', 'TaxCrudController');
	CRUD::resource('orders', 'OrderCrudController');
	CRUD::resource('order-statuses', 'OrderStatusCrudController');
	CRUD::resource('clients', 'ClientCrudController');
	CRUD::resource('users', 'UserCrudController');
	CRUD::resource('cart-rules', 'CartRuleCrudController');
	CRUD::resource('specific-prices', 'SpecificPriceCrudController');
	CRUD::resource('notification-templates', 'NotificationTemplateCrudController');
	CRUD::resource('paymentmethod', 'PaymentMethodCrudController');
	CRUD::resource('posts', 'PostCrudController');
	CRUD::resource('supplier', 'SupplierCrudController');
	CRUD::resource('purchasereceipt', 'PurchaseReceiptCrudController');
	CRUD::resource('purchase', 'PurchaseCrudController');
	CRUD::resource('stock', 'StockCrudController');
	CRUD::resource('blogcategory', 'BlogcategoryCrudController');

	// listing
	Route::get('purchaslisting','OtherController@purchaselisting');
	Route::get('recepts','OtherController@recepts');
	Route::get('/allproductbelogntopurchase/{id}','OtherController@allproductbelogntopurchase');
	Route::get('/product/search/{query}','OtherController@products');
	Route::get('/product/search/','OtherController@products');
	Route::post('/purchaselisting/createlisting ','OtherController@createlisting');

	// Clone Products
	Route::post('products/clone', ['as' => 'clone.product', 'uses' => 'ProductCrudController@cloneProduct']);

	// Update Order Status
	Route::post('orders/update-status', ['as' => 'updateOrderStatus', 'uses' => 'OrderCrudController@updateStatus']);
});


// Ajax
Route::group(['middleware' => ['admin','isadmin'],
			  'prefix' => 'ajax',
			  'namespace' => 'Admin'
], function() {
	// Get attributes by set id
	Route::post('attribute-sets/list-attributes', ['as' => 'getAttrBySetId', 'uses' => 'AttributeSetCrudController@ajaxGetAttributesBySetId']);

	// Product images upload routes
	Route::post('product/image/upload', ['as' => 'uploadProductImages', 'uses' => 'ProductCrudController@ajaxUploadProductImages']);
	Route::post('product/image/reorder', ['as' => 'reorderProductImages', 'uses' => 'ProductCrudController@ajaxReorderProductImages']);
	Route::post('product/image/delete', ['as' => 'deleteProductImage', 'uses' => 'ProductCrudController@ajaxDeleteProductImage']);

	// Get group products by group id
	Route::post('product-group/list/products', ['as' => 'getGroupProducts', 'uses' => 'ProductGroupController@getGroupProducts']);
	Route::post('product-group/list/ungrouped-products', ['as' => 'getUngroupedProducts', 'uses' => 'ProductGroupController@getUngroupedProducts']);
	Route::post('product-group/add/product', ['as' => 'addProductToGroup', 'uses' => 'ProductGroupController@addProductToGroup']);
	Route::post('product-group/remove/product', ['as' => 'removeProductFromGroup', 'uses' => 'ProductGroupController@removeProductFromGroup']);

	// Client address
	Route::post('client/list/addresses', ['as' => 'getClientAddresses', 'uses' => 'ClientAddressController@getClientAddresses']);
	Route::post('client/add/address', ['as' => 'addClientAddress', 'uses' => 'ClientAddressController@addClientAddress']);
	Route::post('client/delete/address', ['as' => 'deleteClientAddress', 'uses' => 'ClientAddressController@deleteClientAddress']);

	// Client company
	Route::post('client/list/companies', ['as' => 'getClientCompanies', 'uses' => 'ClientCompanyController@getClientCompanies']);
	Route::post('client/add/company', ['as' => 'addClientCompany', 'uses' => 'ClientCompanyController@addClientCompany']);
	Route::post('client/delete/company', ['as' => 'deleteClientCompany', 'uses' => 'ClientCompanyController@deleteClientCompany']);

	// Notification templates
	Route::post('notification-templates/list-model-variables', ['as' => 'listModelVars', 'uses' => 'NotificationTemplateCrudController@listModelVars']);
});

Route::get('/home', 'HomeController@index')->name('home');