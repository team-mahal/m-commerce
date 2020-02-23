<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class OtherPageController extends Controller
{
    public function termofuse()
    {
    	return view('pages.termofuse')->with('termofuse',Page::find(1));
    }

    public function paymentmethod()
    {
    	return view('pages.paymentmethod')->with('termofuse',Page::find(1));
    }

   	public function shopingguide()
    {
    	return view('pages.shopingguide')->with('termofuse',Page::find(1));
    }

    public function locationsweship()
    {
    	return view('pages.locationsweship')->with('locationsweship',Page::find(1));
    }

    public function estimateddeliverytime()
    {
    	return view('pages.estimateddeliverytime')->with('termofuse',Page::find(1));
    }
}
