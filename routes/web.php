<?php

use App\Http\Controllers\ArticleController;
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

//todo  any => tüm methodları alabilir get post put patch delete...
Route::any("/hersey", function () {
    dd("her şey geldi");
});

//todo  resource => alacağı tüm methodları otomatik olarak oluşturur
Route::resource("article", ArticleController::class);

//todo  resource => alacağı tüm API methodları otomatik olarak oluşturur
Route::apiResource("/api/article", App\Http\Controllers\Api\ArticleController::class);

//todo  Route::whereNumber(), Route::whereAlpha(), Route::whereAlphaNumeric(), Route::whereIn() kullanımı
Route::get("/users1/{id}", [UserController::class, "showId"])
    ->name("user.showId")
    ->whereNumber("id");
Route::get("/users2/{name}", [UserController::class, "showName"])
    ->name("user.showName")
    ->whereAlpha("name");
Route::get("/users3/{nameId}", [UserController::class, "showNameId"])
    ->name("user.showNameId")
    ->whereAlphaNumeric("nameid");
Route::get("/user/{role}", [UserController::class, "roleCheck"])
    ->name("user.roleCheck")
    ->whereIn("role", ["admin", "user"]);

//todo  Route::prefix(), Route::group() bir controller'ı birden fazla route ile kullanmak
Route::prefix("admin")->group(function () {
    Route::get("/edit-article", [ArticleController::class, "edit"])->name("admin.articleEdit");
    Route::get("/article/{id}/delete", [ArticleController::class, "destroy"])->name("admin.articleDestroy");
});

//Route::controller([UserController::class])->group(function () {
//    Route::get("/get-user","getUser");
//    Route::get("/delete-user","deleteUser");
//});

