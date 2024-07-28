<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Dashboard\ArtikelController;
use App\Http\Controllers\Dashboard\FilmController;
use App\Http\Controllers\Dashboard\GambarController;
use App\Http\Controllers\Dashboard\LandingPageController;
use App\Http\Controllers\Dashboard\MenuController;
use App\Http\Controllers\Dashboard\MusikController;
use App\Http\Controllers\Dashboard\SubmenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    
    // For Laravel versions older than 5.5
    if (class_exists('Artisan') && method_exists(Artisan::class, 'call')) {
        Artisan::call('optimize');
    }

    return "Cache is cleared";
});
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


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\User@index')->name('dashboard');
//gallery
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gallery/destroy/{id}', 'App\Http\Controllers\GalleryController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gallery/edit/{id}', 'App\Http\Controllers\GalleryController@edit');
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/gallery', GalleryController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/gallery/update', 'App\Http\Controllers\GalleryController@update');
//gallery videos
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/videos/destroy/{id}', 'App\Http\Controllers\VideoController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/videos/edit/{id}', 'App\Http\Controllers\VideoController@edit');
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/videos', VideoController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/videos/update', 'App\Http\Controllers\VideoController@update');
//blog
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/blog/destroy/{id}', 'App\Http\Controllers\BlogController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/blog', BlogController::class);
//home
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/home', HomeController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/home/update', 'App\Http\Controllers\HomeController@update');
//portfolio
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/portfolio', PortfolioController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/portfolio/destroy/{id}', 'App\Http\Controllers\PortfolioController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/portfolio/edit/{id}', 'App\Http\Controllers\PortfolioController@edit');
//customer
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/customer', CustomerController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/customer/destroy/{id}', 'App\Http\Controllers\CustomerController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/customer/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
//about
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/about', AboutController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/about/destroy/{id}', 'App\Http\Controllers\AboutController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/about/ubah/{id}', 'App\Http\Controllers\AboutController@ubah');
//profile

Route::middleware(['auth:sanctum', 'verified'])->resource('dashboard/misi', MisiController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/misi/edit/{id}', 'App\Http\Controllers\MisiController@edit');
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/misi/update', 'App\Http\Controllers\MisiController@update');

//kategori
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/kategori', KategoriController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/kategori/destroy/{id}', 'App\Http\Controllers\KategoriController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/kategori/edit/{id}', 'App\Http\Controllers\KategoriController@edit');

//produk
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/produk', ProdukController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/produk/destroy/{id}', 'App\Http\Controllers\ProdukController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/produk/edit/{id}', 'App\Http\Controllers\ProdukController@edit');

//menu
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/menu', MenuController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/menu/destroy/{id}', 'App\Http\Controllers\Dashboard\MenuController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/menu/edit/{id}', 'App\Http\Controllers\Dashboard\MenuController@edit');


//sub menu
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/submenu', SubmenuController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/submenu/destroy/{id}', 'App\Http\Controllers\Dashboard\SubmenuController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/submenu/edit/{id}', 'App\Http\Controllers\Dashboard\SubmenuController@edit');

//artikel
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/artikel', ArtikelController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/artikel/destroy/{id}', 'App\Http\Controllers\Dashboard\ArtikelController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/artikel/edit/{id}', 'App\Http\Controllers\Dashboard\ArtikelController@edit');

//galllery Landing Page
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/landingpage', LandingPageController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/landingpage/destroy/{id}', 'App\Http\Controllers\Dashboard\LandingPageController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/landingpage/edit/{id}', 'App\Http\Controllers\Dashboard\LandingPageController@edit');

//galllery Gamabar
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/gambar', GambarController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gambar/destroy/{id}', 'App\Http\Controllers\Dashboard\GambarController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gambar/edit/{id}', 'App\Http\Controllers\Dashboard\GambarController@edit');

//galllery Movie
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/film', FilmController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/film/destroy/{id}', 'App\Http\Controllers\Dashboard\FilmController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/film/edit/{id}', 'App\Http\Controllers\Dashboard\FilmController@edit');

//galllery Musik
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/musik', MusikController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/musik/destroy/{id}', 'App\Http\Controllers\Dashboard\MusikController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/musik/edit/{id}', 'App\Http\Controllers\Dashboard\MusikController@edit');

// frontend
Route::get('/','App\Http\Controllers\FrontendController@index');
//Route::get('App\Http\Controllers\FrontendController@index_footer');
Route::any('(:any)', 'App\Http\Controllers\FrontendController@index_footer');

Route::get('gallery','App\Http\Controllers\GalleryController@index_fr');
Route::get('gallery/videos','App\Http\Controllers\VideoController@index_fr');
Route::get('/blog','App\Http\Controllers\BlogController@index_fr');
Route::get('blog/{blog:title}', 'App\Http\Controllers\BlogController@show');

Route::get('portfolio', 'App\Http\Controllers\PortfolioController@index_fr');
Route::get('profile', 'App\Http\Controllers\MisiController@index_fr');
//Route::get('/','App\Http\Controllers\HomeController@index_home_blog');
Route::get('/contact', 'App\Http\Controllers\Contact@index');
Route::post('/contact/send', 'App\Http\Controllers\Contact@store');

