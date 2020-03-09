<?php

use App\Models\Product;
foreach (Product::whereNotNull('slug')->where('slug','!=','')->get() as $key => $value) {
	 Route::get('product/'.$value->slug, [
        'uses' => 'HomeController@show',
        'page' => $value->id
    ])->name($value->slug);
}

// Pages
Route::get('/termofuse', 'OtherPageController@termofuse');
Route::get('/paymentmethod', 'OtherPageController@paymentmethod');
Route::get('/shopingguide', 'OtherPageController@shopingguide');
Route::get('/locationsweship', 'OtherPageController@locationsweship');
Route::get('/estimateddeliverytime', 'OtherPageController@estimateddeliverytime');


Route::get('/', 'HomeController@index');
Route::resource('testimonial', 'TestimonialController')->middleware('auth');

Route::get('/productdetails/{id}', 'HomeController@productdetails')->name('productdetails');
Route::get('/allproduct', 'HomeController@allproduct')->name('allproduct');
Route::get('/category/{id}', 'HomeController@allproduct');
Route::get('/cart', 'HomeController@cart');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
Route::get('/remove/{id}', 'HomeController@remove');
Route::get('/removebigcart/{id}', 'HomeController@removebigcart');
Route::get('/quickview/{id}', 'HomeController@quickview');
Route::post('/addtocart', 'HomeController@addtocart');
Route::get('/addtocart1/{id}', 'HomeController@addtocart1');
Route::get('/addtocart/{id}', 'HomeController@addtocart');
Route::get('/addtocart/', 'HomeController@addtocart');
Route::get('/search/', 'HomeController@search')->name('search');
Route::get('/checkout', 'HomeController@checkout')->middleware('auth');
Route::post('/address', 'HomeController@address')->middleware('auth');
Route::get('address/delete/{id}', 'HomeController@addressdelate')->middleware('auth');
Route::post('placeorder', 'HomeController@placeorder')->middleware('auth');
Route::post('post/comment/{id}', 'BlogController@comment')->middleware('auth');
Route::post('post/commentreplay/{id}', 'BlogController@commentReplay')->middleware('auth');

	
// blog
Route::get('/blogs', 'BlogController@index');
Route::get('/post/{id}', 'BlogController@post');

// User
Route::get('profile',"ProfileController@index");
Route::get('myorders',"ProfileController@myorders");

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
	CRUD::resource('page', 'PageCrudController');
	CRUD::resource('ads', 'AdsCrudController');
	CRUD::resource('brand', 'BrandCrudController');
	CRUD::resource('generic', 'GenericCrudController');

	// listing
	Route::get('purchaslisting','OtherController@purchaselisting');
	Route::get('deletepurchase/{purchase}','OtherController@deletepurchase');
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