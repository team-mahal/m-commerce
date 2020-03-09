<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PaymentMethod;
class OtherPageController extends Controller
{
    public function termofuse()
    {
    	return view('pages.termofuse')->with('data',Page::find(1));
    }

    public function paymentmethod()
    {
    	return view('pages.paymentmethod')->with('data',PaymentMethod::all());
    }

   	public function shopingguide()
    {
    	return view('pages.shopingguide')->with('data',Page::find(4));
    }

    public function locationsweship()
    {
    	return view('pages.locationsweship')->with('data',Page::find(3));
    }

    public function estimateddeliverytime()
    {
    	return view('pages.estimateddeliverytime')->with('data',Page::find(2));
    }

    public function generic()
    {
        return view('allgeneric')->with('data',Page::find(2));
    }

    public function brand()
    {
        return view('allbrand')->with('data',Page::find(2));
    }
}
