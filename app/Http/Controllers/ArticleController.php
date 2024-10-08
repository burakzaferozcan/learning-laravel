<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        dd("index : listeleme işlemi");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        dd("create : makale oluşturma formu geldi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        dd("$id numaralı makale");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id="0")
    {
        //
//        dd("$id numaralı makale edit");
        return view("admin.articles.edit");

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        dd("$id numaralı makale put patch");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        dd("$id numaralı makale silindi");

    }
}
