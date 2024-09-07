<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupportFormController;
use App\Http\Controllers\ContactController;


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

Route::get('/bzo', function () {
    return view('bzo');
});
Route::get("/home", [HomeController::class, 'index']);


Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/contact", [ContactController::class, "showForm"])->name("contact");
Route::post("/contact", [ContactController::class, "contact"]);
Route::post("/user/{id}", [ContactController::class, "user"])->name("user");
//Route::post("/user/{id}", [\App\Http\Controllers\ContactController::class, "user"])->name("user")->where("id", "[0-9]+");
//todo  soru işareti isteğe bağlı gönderilir
//Route::post("/user/{id}/{name?}", [\App\Http\Controllers\ContactController::class, "user"])
//    ->name("user")
//    ->where(["id" => "[0-9]+", "name" => "[a-zA-Z]+"]);

//todo  birden fazla method türü match ile desteklenebilir
Route::match(["get", "post"], "/support-form", [SupportFormController::class, "support"])->name("support-form.support");

//todo  patch => kullanıcının sadece bir bilgisi güncellenmek isteniyorsa kullanılır.
Route::patch("/users/{id}/guncelle", [UserController::class, "update"])->name("user.update");

//todo  put => kullanıcının tüm bilgilerini güncellenmek isteniyorsa kullanılır.
Route::put("/users/{id}/tumunu-guncelle", [UserController::class, "updateAll"])->name("user.updateAll");

//todo  delete => kullanıcıyı/kullanıcı bilgilerini silmek isteniyorsa kullanılır.
Route::delete("/users/{id}/sil", [UserController::class, "delete"])->name("user.delete");
