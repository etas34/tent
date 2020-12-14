<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypeController;
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

Route::get('lang/{locale}', [HomeController::class, 'setlocale']);
Route::group(['middleware' => 'setlocale'], function() {

    Route::get('/', function () {
        return view('welcome');
    });

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
        });
        Route::group(['prefix'=>'model','as'=>'model.','middleware'=>'auth'],function (){
            Route::get('/', [TypeController::class, 'index'])->name('index');
            Route::get('/create', [TypeController::class, 'create'])->name('create');
            Route::get('/edit/{type}', [TypeController::class, 'edit'])->name('edit');
            Route::get('/destroy/{type}', [TypeController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{type}', [TypeController::class, 'update'])->name('update');
            Route::post('/create', [TypeController::class, 'store'])->name('store');
        });
        Route::group(['prefix'=>'product','as'=>'product.','middleware'=>'auth'],function (){
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
            Route::get('/destroy/{product}', [ProductController::class, 'destroy'])->name('destroy');
            Route::post('/edit/{product}', [ProductController::class, 'update'])->name('update');
            Route::post('/create', [ProductController::class, 'store'])->name('store');
        });

    });


});


require __DIR__.'/auth.php';
