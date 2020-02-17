<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
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

}
