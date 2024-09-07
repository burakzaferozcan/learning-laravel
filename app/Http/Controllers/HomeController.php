<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $age = 23;


//todo  Controller'dan view'a veri bu şekilde gönderilebilir
//return view('front.index', ["age" => $age]);
//todo  ya da compact fonksiyonu ile gönderebiliriz
//return view('front.index', compact('age'));
//todo  ya da with fonksiyonu ile gönderebiliriz
//return view("front.index")->with('age', $age)->with("name", "burak");
        return view("front.index")->with(['age' => $age, "name" => "burak"]);


    }

    public function about()
    {
        $age = 23;
        $name = "burak";
        $person = new \stdClass();
        $person->age = $age;
        $person->name = $name;


        return view('front.about', compact('person'));
//        return redirect(route('contact'));
//        return redirect()->route('contact');
//        return Redirect::route("contact");k
    }


}
