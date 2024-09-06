<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('front.contact');
    }

    public function contact(Request $request)
    {
//        dd(\request()->get("fullname"));
//        dd($request->email);
//        dd($request->fullname);
        dd($request->all());
    }

    public function user(Request $request, $id)
    {

//        dd($request->id);
//        dd(gettype($id));
//        dd($request->all());
    }

}
