<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PurchaseReceipt;
use App\Models\Purchase;
use App\Models\Product;
class OtherController extends Controller
{
    public function purchaselisting()
    {
    	return view("admin.purchaselisting");
    }

    public function recepts()
    {
    	return response(PurchaseReceipt::with('supplier')->get());
    }

    public function allproductbelogntopurchase($id)
    {
    	return response(Purchase::with('product')->where('purchase_receipt_id',$id)->get());
    }

    public function products($query='')
    {
    	return response(Product::where('name','like','%'.$query.'%')->get());
    }

    public function createlisting(Request $request)
    {
    	$purchase = new Purchase();
    	$purchase->purchase_receipt_id =$request->purchase_receipt_id;
    	$purchase->product_id =$request->product_id;
    	$purchase->quantity =$request->quantity;
    	$purchase->total_buy_price =$request->total_buy_price;
    	$purchase->bp =$request->unit_buy_price_purchase;
    	$purchase->sp =$request->general_sale_price;
    	$purchase->save();
    	$stock=Product::find($request->product_id);
    	$stock->stock=$stock->stock+$request->quantity;
    	$stock->bprice=$request->unit_buy_price_purchase;
    	$stock->price=$request->general_sale_price;
    	$stock->update();
    	return response(Purchase::with('product')->where('purchase_receipt_id',$request->purchase_receipt_id)->get());
    }
}
