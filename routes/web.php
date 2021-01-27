<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InsulationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\MainController;
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
Route::get('/reset', function(){
    Artisan::call('config:cache');

    Artisan::call('cache:clear');


});
Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::get('/{locale}', [HomeController::class, 'setlocale']);
Route::group(['prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],'middleware' => 'setlocale'], function() {

    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/help', [MainController::class, 'help'])->name('help');
    Route::get('/search/{text}', [MainController::class, 'search'])->name('search');
    Route::get('/contact', [MainController::class, 'contact'])->name('contact');
    Route::get('/about', [MainController::class, 'about'])->name('about');
    Route::get('/page/{page}', [MainController::class, 'page'])->name('page');
    Route::get('/products/{category}', [MainController::class, 'products'])->name('frontpage.products');
    Route::get('/products/{category}/{type}', [MainController::class, 'productsmodel'])->name('frontpage.productsmodel');
    Route::get('/product/detail/{product}', [MainController::class, 'productdetail'])->name('frontpage.productdetail');

    Route::get('/products/filter', [MainController::class, 'products']);
    Route::post('/products/filter', [MainController::class, 'filtre'])->name('filtre');

    Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function (){

        Route::get('/', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/form/create', [HomeController::class, 'form_create'])->name('form.create');
        Route::get('/form', [HomeController::class, 'form_index'])->name('form.index');

        Route::group(['prefix'=>'category','as'=>'category.','middleware'=>'auth'],function (){
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
            Route::get('/destroy/{category}', [CategoryController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{category}', [CategoryController::class, 'update'])->name('update');
            Route::post('/create', [CategoryController::class, 'store'])->name('store');
            Route::post('/getsubcat', [CategoryController::class, 'getsubcat'])->name('getsubcat');
        });
        Route::group(['prefix'=>'slider','as'=>'slider.','middleware'=>'auth'],function (){
            Route::get('/', [SliderController::class, 'index'])->name('index');
            Route::get('/create', [SliderController::class, 'create'])->name('create');
            Route::get('/edit/{slider}', [SliderController::class, 'edit'])->name('edit');
            Route::get('/destroy/{slider}', [SliderController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{slider}', [SliderController::class, 'update'])->name('update');
            Route::post('/create', [SliderController::class, 'store'])->name('store');
        });
        Route::group(['prefix'=>'model','as'=>'model.','middleware'=>'auth'],function (){
            Route::get('/', [TypeController::class, 'index'])->name('index');
            Route::get('/create', [TypeController::class, 'create'])->name('create');
            Route::get('/edit/{type}', [TypeController::class, 'edit'])->name('edit');
            Route::get('/destroy/{type}', [TypeController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{type}', [TypeController::class, 'update'])->name('update');
            Route::post('/create', [TypeController::class, 'store'])->name('store');
        });
        Route::group(['prefix'=>'insulation','as'=>'insulation.','middleware'=>'auth'],function (){
            Route::get('/', [InsulationController::class, 'index'])->name('index');
            Route::get('/create', [InsulationController::class, 'create'])->name('create');
            Route::get('/edit/{insulation}', [InsulationController::class, 'edit'])->name('edit');
            Route::get('/destroy/{insulation}', [InsulationController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{insulation}', [InsulationController::class, 'update'])->name('update');
            Route::post('/create', [InsulationController::class, 'store'])->name('store');
        });
        Route::group(['prefix'=>'product','as'=>'product.','middleware'=>'auth'],function (){
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
            Route::get('/destroy/{product}', [ProductController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{product}', [ProductController::class, 'update'])->name('update');
            Route::post('/create', [ProductController::class, 'store'])->name('store');
        });

        Route::group(['prefix'=>'page','as'=>'page.','middleware'=>'auth'],function (){
            Route::get('/', [PageController::class, 'index'])->name('index');
            Route::get('/create', [PageController::class, 'create'])->name('create');
            Route::get('/edit/{page}', [PageController::class, 'edit'])->name('edit');
            Route::get('/destroy/{page}', [PageController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{page}', [PageController::class, 'update'])->name('update');
            Route::post('/create', [PageController::class, 'store'])->name('store');
        });

    });


});
Route::get('/deneme',[MainController::class,'deneme']);



require __DIR__.'/auth.php';
