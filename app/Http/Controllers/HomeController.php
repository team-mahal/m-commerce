<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {   
        return view('welcome')->with('posts',Post::orderBy('id','desc')->take(10)->get())->with('newarrivels',Product::orderBy('id','desc')->take(10)->get());
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
