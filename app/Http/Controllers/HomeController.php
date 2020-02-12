<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {   
        $newarrivels=Product::orderBy('id','desc')->with('specificPrice')->with('images')->take(10)->get();
        return view('welcome')->with('posts',Post::orderBy('id','desc')->take(10)->get())->with('newarrivels',$newarrivels);
    }

    public function cart()
    {
        return view('cart');
    }

    public function quickview($id='')
    {
        $product= Product::with('specificPrice')->with('images')->find($id);
        return response($product);
    }

    public function addtocart(Request $request)
    {
        $product= Product::with('specificPrice')->with('images')->find($request->product_id);

        $img='';
        if($product->images && count($product->images)>0){
            $img=$product->images[0]->name;
        }

        \Cart::add(
          ['id' => $product->id, 'name' => $product->name, 'qty' => 1,'taxRate'=>0, 'price' => $product->price,'options'=>['image'=>$img]],
        );
        return redirect()->back();
    }

    public function remove($id='')
    {
        \Cart::remove($id);
        return redirect()->back();
    }

    public function productdetails()
    {
        return view('productdetails');
    }

    public function allproduct()
    {
    	return view('allproduct');
    }
}
