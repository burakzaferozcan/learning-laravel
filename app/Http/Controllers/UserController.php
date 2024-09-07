<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request){
        dd($request->all());
    }

    public function updateAll(Request $request){
        dd($request->all());
    }

    public function delete(Request $request){
        dd($request->all());
    }

    public function showId(Request $request,$id)
    {
        dd($id);
    }
    public function showName(Request $request,$name)
    {
        dd($name);
    }
    public function showNameId(Request $request,$nameid)
    {
        dd($nameid);
    }
    public function roleCheck(Request $request,$role)
    {
        dd($role);
    }
}
