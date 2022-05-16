<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripController extends Controller
{
    public function index ()
    {
        return view('front.strip.view');
    }
    public function store (Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $xx = Stripe\Charge::create ([

            "amount" => 100 * 100,

            "currency" => "usd",

            "source" => $request->stripeToken,

            "description" => "Test payment from itsolutionstuff.com.",

            'receipt_email' => 'demo@demo.shit',

        ]);

        if ($xx->status == "succeeded")
        {
            Session::flash('success', 'Payment successful!');
        } else {
            Session::flash('success', 'wrong');
        }





        return back();
    }
}
