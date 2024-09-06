<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('front.index');
//})->name('home');
//
//Route::get('/about', function () {
//    return view('front.about');
//})->name('about');

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/contact", [\App\Http\Controllers\ContactController::class, "showForm"])->name("contact");
Route::post("/contact", [\App\Http\Controllers\ContactController::class, "contact"]);
Route::post("/user/{id}", [\App\Http\Controllers\ContactController::class, "user"])->name("user");
//Route::post("/user/{id}", [\App\Http\Controllers\ContactController::class, "user"])->name("user")->where("id", "[0-9]+");
//todo soru işareti isteğe bağlı gönderilir
//Route::post("/user/{id}/{name?}", [\App\Http\Controllers\ContactController::class, "user"])
//    ->name("user")
//    ->where(["id" => "[0-9]+", "name" => "[a-zA-Z]+"]);

Route::get('/bzo', function () {
    return view('bzo');
});

Route::get("/home", [HomeController::class, 'index']);
