<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogcategory;
use App\Models\Post;
use App\Models\Product;
use App\Models\Ads;
use App\Models\Category;
use App\Comment;
class BlogController extends Controller
{
    public function index()
    {
    	return view('blogs.index');
    }

    public function post($id)
    {   
        $mostview=Product::orderBy('id','desc')->with('specificPrice')->with('images')->skip(12)->take(12)->get();
        $lastcategory = Category::latest()->where('parent_id',NUll)->take(50)->get();
    	return view('blogs.index')->with('blogscategoryes',Blogcategory::all())->with('post',Post::find($id))->with('mostview',$mostview)->with('lastcategory',$lastcategory)->with('ads',Ads::all());
    }

    public function comment(Request $request,$id)
    {
    	$comment=new Comment();
    	$comment->user_id=\Auth::id();
    	$comment->commentable_id=$id;
    	$comment->commentable_type = 'App\Models\Post';
    	$comment->content=$request->content;
    	$comment->save();
    	return redirect()->back();
    }

    public function commentReplay(Request $request,$id)
    {
    	$newReply = new Comment();
        $newReply->content = $request->content;
        $newReply->commentable_id = $id;
        $newReply->commentable_type = 'App\Comment';
        $newReply->user_id = \Auth::id();
        $newReply->save();
    	return redirect()->back();
    }
}
