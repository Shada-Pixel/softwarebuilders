<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Course;
use App\Models\Category;
use Illuminate\View\View;




class HomeController extends Controller
{
    function index() : View
    {
        $categories = Category::all();
        return view('index',[
            'categories' => $categories,
        ]);
    }

    function about() { return view('about'); }
    function service() { return view('service'); }

    // course controller
    function cource(Request $request) {

        $categories = Category::all();
        if ($request->category_id) {
            $checked_categories = $request->category_id;
            $courses = Course::wherein('category_id',$request->category_id)->where('status','3')->get();
            return view('cource',compact('courses','categories','checked_categories'));
        }else {
            $checked_categories = [];

            $courses = Course::where('status','3')->get();
            return view('cource',compact('courses','categories','checked_categories'));

        }

    }

    function gallery() { return view('gallery'); }
    function contact() { return view('contact'); }



    function cshow() { return view('dashboard.courses.show'); }




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