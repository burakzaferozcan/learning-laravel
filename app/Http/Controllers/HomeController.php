<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
//        return view('front.about');
//        return redirect(route('contact'));
//        return redirect()->route('contact');
        return Redirect::route("contact");
    }

    public function contact()
    {
        return view('front.contact');
    }
}
