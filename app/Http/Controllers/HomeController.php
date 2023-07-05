<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;


class HomeController extends Controller
{
    function index() { return view('index'); }
    function about() { return view('about'); }
    function service() { return view('service'); }
    function cource() { return view('cource'); }
    function gallery() { return view('gallery'); }
    function contact() { return view('contact'); }



    // Subscribing user
    public function subscribe(Request $request)
    {
        $exist = Subscriber::where('email', $request->email)->get();
        if ($exist->count() > 0) {
            return response()->json(['status' => 'error', 'message' => 'Email already subscribed !']);
        }

        $subscribe = Subscriber::create(['email' => $request->email]);

        if ($subscribe) {
            // $msg = Setting::where('property', 'newslettertxt')->first()->value;
            $msg = 'Welcome! Subscribed successfully !';
            // try {
            //     Mail::to($subscribe->email)->send(new SubscriptionMail($msg));
            // } catch (\Exception $exception) {
            // }
            return response()->json(['status' => 'success', 'message' => $msg]);
        }
    }
}



