<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use App\Models\Address;
use App\Models\Carrier;
use App\Models\PaymentMethod;
use App\Models\Order;
class HomeController extends Controller
{
    public function index()
    {   
        $newarrivels=Product::orderBy('id','desc')->with('specificPrice')->with('images')->take(12)->get();
        $mostview=Product::orderBy('id','desc')->with('specificPrice')->with('images')->skip(12)->take(12)->get();
        return view('welcome')->with('posts',Post::orderBy('id','desc')->take(10)->get())->with('newarrivels',$newarrivels)->with('mostview',$mostview);
    }

    public function cart()
    {
        return view('cart');
    }

    public function quickview($id='')
    {
        $product= Product::with('specificPrice')->with('images')->find($id);
        return view('inc.dynamicmodel')->with('product',$product);
    }

    public function addtocart(Request $request,$id='')
    {   
        $qty=$request->quantity;
        if(!$qty){
            $qty=1;
        }
        if(!$id==''){
            $product= Product::with('specificPrice')->with('images')->find($id);
            $img='';
            if($product->images && count($product->images)>0){
                $img=$product->images[0]->name;
            }

            \Cart::add(
              ['id' => $product->id, 'name' => $product->name, 'qty' => $qty,'taxRate'=>0, 'price' => $product->price,'options'=>['image'=>$img]],
            );
            return view('inc.cart');
        }else{
            return view('inc.cart');
        }
    }

    public function remove($id='')
    {
        \Cart::remove($id);
        return view('inc.cart');
    }

    public function productdetails($id)
    {
        $product= Product::with('specificPrice')->with('images')->find($id);
        $relatedproduct= Product::with('categories')->find($id);
        $id=$relatedproduct->categories[0]->id;
        $relatedproduct= Category::with('products')->find($id);
        $newproduct= Product::orderBy('id','desc')->with('specificPrice')->with('images')->take(5)->get();
        return view('productdetails')->with('product',$product)->with('relatedproduct',$relatedproduct)->with('newproduct',$newproduct);
    }


    public function show(Request $request, Product $page = null)
    {
        $id = $request->route()->getAction()['page'];
        $product= Product::with('specificPrice')->with('images')->find($id);
        $relatedproduct= Product::with('categories')->find($id);
        $id=$relatedproduct->categories[0]->id;
        $relatedproduct= Category::with('products')->find($id);
        $newproduct= Product::orderBy('id','desc')->with('specificPrice')->with('images')->take(5)->get();
        return view('productdetails')->with('product',$product)->with('relatedproduct',$relatedproduct)->with('newproduct',$newproduct);
    }

    public function allproduct(Request $request)
    {   
        $filter= $request->filter;
        $products=Product::with('specificPrice');
        if(isset($filter)){
            if ($filter=='product.date_add.desc') {
                $products->orderBy('updated_at','desc');
            }
            if ($filter=='product.date_add.asc') {
                $products->orderBy('updated_at','asc');
            }
            if ($filter=='product.name.asc') {
                $products->orderBy('name','desc');
            }
            if ($filter=='product.name.desc') {
                $products->orderBy('name','asc');
            }
            if ($filter=='product.price.desc') {
                $products->orderBy('price','desc');
            }
            if ($filter=='product.price.asc') {
                $products->orderBy('price','asc');
            }
        }
    	return view('allproduct')->with('products',$products->paginate(12));
    }

    public function checkout()
    {
        return view('checkout')->with('user',\Auth::user())->with('corriers',Carrier::all())->with('PaymentMethods',PaymentMethod::all());
    }

    public function address(Request $request)
    {
        $address= new Address();
        $address->name=$request->name;
        $address->country_id=1;
        $address->user_id=\Auth::id();
        $address->address1=$request->address1;
        $address->address2=$request->address2;
        $address->county=$request->county;
        $address->postal_code=$request->postal_code;
        $address->city=$request->city;
        $address->phone=$request->phone;
        $address->save();
        return redirect('/checkout');
    }

    public function addressdelate($id)
    {
        Address::find($id)->delete();
        return redirect('/checkout');
    }

    public function placeorder(Request $request)
    {
        $validatedData = $request->validate([
            'address_id' => 'required',
            'corrier' => 'required',
            'paymentmethod' => 'required',
        ]);

        $corair= Carrier::find($request->corrier);

        $order= new Order();

        $lastInvoiceID = $order->where('user_id', '=', \Auth::user()->id)->orderBy('id', 'desc')->pluck('id')->first();
        $newInvoiceID = $lastInvoiceID + 1;

        $order->user_id= \Auth::id();
        $order->status_id= 1;
        $order->carrier_id= $request->corrier;
        $order->shipping_address_id= $request->address_id;
        $order->billing_address_id= $request->address_id;
        $order->currency_id=1;
        $order->invoice_no=$newInvoiceID;
        $order->invoice_date=date("Y-m-d");
        $order->invoice_date=date("Y-m-d");
        $order->total_shipping=$corair->price;
        $order->total_tax=\Cart::tax();
        $order->save();
        foreach (\Cart::content() as $key => $row) {
            $product= Product::find($row->id);
            $product->stock = $product->stock-$row->qty;
            $product->update();
            \DB::insert('insert into order_product (product_id, order_id,name,price,quantity) values (?,?,?,?,?)', [$row->id,$order->id,$row->name,$row->price,$row->qty]);
        }
        \Cart::destroy();
        return redirect('profile')->with('success','Order Place Successfully');
    }
}
