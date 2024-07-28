<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Dashboard\CompareController;
use App\Http\Controllers\Dashboard\GallleriSection1Controller;
use App\Http\Controllers\Dashboard\OverviewController;
use App\Http\Controllers\Dashboard\OverviewProdukController;
use App\Http\Controllers\Dashboard\TechSpecsController;
use App\Http\Controllers\Dashboard\TipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Dashboard\ArtikelController;
use App\Http\Controllers\Dashboard\MenuController;
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

//galllery section 1
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/gallleriSection1', GallleriSection1Controller::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gallleriSection1/destroy/{id}', 'App\Http\Controllers\Dashboard\GallleriSection1Controller@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gallleriSection1/edit/{id}', 'App\Http\Controllers\Dashboard\GallleriSection1Controller@edit');


//tipe produk
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/tipe', TipeController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/tipe/destroy/{id}', 'App\Http\Controllers\Dashboard\TipeController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/tipe/edit/{id}', 'App\Http\Controllers\Dashboard\TipeController@edit');

//overview produk
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/overviewProduk', OverviewProdukController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/overviewProduk/destroy/{id}', 'App\Http\Controllers\Dashboard\OverviewProdukController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/overviewProduk/edit/{id}', 'App\Http\Controllers\Dashboard\OverviewProdukController@edit');


//overview item produk
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/overview', OverviewController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/overview/destroy/{id}', 'App\Http\Controllers\Dashboard\OverviewController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/overview/edit/{id}', 'App\Http\Controllers\Dashboard\OverviewController@edit');


//techSpecs item produk
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/techSpecs', TechSpecsController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/techSpecs/destroy/{id}', 'App\Http\Controllers\Dashboard\TechSpecsController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/techSpecs/edit/{id}', 'App\Http\Controllers\Dashboard\TechSpecsController@edit');


//compare item produk
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/compare', CompareController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/compare/destroy/{id}', 'App\Http\Controllers\Dashboard\CompareController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/compare/edit/{id}', 'App\Http\Controllers\Dashboard\CompareController@edit');


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

