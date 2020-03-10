<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Brand;
use App\Mail\SendContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Models\Generic;
use App\Models\PaymentMethod;
class OtherPageController extends Controller
{
    public function termofuse()
    {
    	return view('pages.termofuse')->with('data',Page::find(1));
    }

    public function contacus()
    {
        return view('pages.contacus');
    }

    public function sendcontactmessage(Request $request)
    {
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        $arr = [
            'g-recaptcha-response' => 'required|recaptcha'
        ];

        Mail::to('md.jual.ah@gmail.com')->send(new SendContactRequest($contact));
        return redirect()->back()->with('success');
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

    public function generic(Request $request)
    {
        $brand = Generic::where('name', 'like', '%' .$request->char)->get();
        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        return view('allgeneric')->with('brand',$brand)->with('char',$request->char)->with('alphabet',$alphabet);
    }

    public function brand(Request $request)
    {
        $brand = Brand::where('name', 'like', '%' .$request->char)->get();
        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        return view('allbrand')->with('brand',$brand)->with('char',$request->char)->with('alphabet',$alphabet);
    }
}
