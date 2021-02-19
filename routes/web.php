<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*02_praktikum_web_lanjut_1

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 1941720018. Nama : Chika Labita';
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman artikel dengan ID : ' . $id;
});
*/

/* 02_praktikum_web_lanjut_2 

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticlesController::class, 'articles']);
*/

/* 02_praktikum_web_lanjut_3

Route::get('/home',[HomesController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class,'products']);
});

Route::get('/news/{id}', function ($id) {
        echo '<a href=https://www.educastudio.com/news><b>https://www.educastudio.com/news</b></a>';
   }
);

Route::prefix('program')->group(function ($id) {
    Route::get('/{id}', [ProgramsController::class,'program']);
});

Route::get('/about-us', function () {
    return '<a href=https://www.educastudio.com/about-us><b>https://www.educastudio.com/about-us</b></a>';
});

Route::resource('contact-us', ContactController::class);

*/