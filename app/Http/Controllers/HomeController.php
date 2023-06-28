<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() { return view('index'); }
    function about() { return view('about'); }
    function service() { return view('service'); }
    function cource() { return view('cource'); }
    function gallery() { return view('gallery'); }
    function contact() { return view('contact'); }
}



