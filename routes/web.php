<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Praktikum 3

// Halaman Home
Route::get('/', function () { return 'Home Page!'; });

// Halaman Products
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games'             , function () { return 'marbel-edu-games';              });
    Route::get('/marbel-and-friends-kids-games', function () { return 'marbel-and-friends-kids-games'; });
    Route::get('/riri-story-books'             , function () { return 'riri-story-books';              });
    Route::get('/kolak-kids-songs'             , function () { return 'kolak-kids-songs';              });
});

// Halaman News
Route::get('/news'       , function ()      { return 'news page';      });
Route::get('/news/{slug}', function ($slug) { return 'SLUG: ' . $slug; });

// Halaman Program
Route::prefix('/program')->group(function () {
    Route::get('/karir'             , function () { return 'karir';              });
    Route::get('/magang'            , function () { return 'magang';             });
    Route::get('/kunjungan-industri', function () { return 'kunjungan-industri'; });
});

// Halaman About Us
Route::get('/about-us', function () { return 'about-us'; });

// Halaman Contact Us
Route::resource('contact-us', function () { return 'resources Contact Us'; });