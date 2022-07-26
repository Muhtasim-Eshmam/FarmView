<?php

use Illuminate\Foundation\Application;
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
//
//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//require __DIR__.'/auth.php';


Route::get('/', [App\Http\Controllers\AdminController::class, 'welcome']);



Route::get('/adminpanel', [App\Http\Controllers\AdminController::class, 'adminmainpage']);
Route::get('/viewuserinfo', [App\Http\Controllers\AdminController::class, 'viewuserinfo']);
Route::get('/adminlogin', [App\Http\Controllers\AdminController::class, 'login']);
Route::post('/valid', [App\Http\Controllers\AdminController::class, 'validation'])->name('validate');





Route::get('/productlist', [App\Http\Controllers\ProductsController::class, 'show']);
Route::get('/createproduct', [App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/storeproduct', [App\Http\Controllers\ProductsController::class, 'store'])->name('store.product');
Route::post('/updateproduct/{products}', [App\Http\Controllers\ProductsController::class, 'update'])->name('update.product');
Route::get('/editproduct/{id}', [App\Http\Controllers\ProductsController::class, 'edit']);
Route::get('/deleteproducts/{id}', [App\Http\Controllers\ProductsController::class, 'destroy']);
Route::post('/searchproducts',  [App\Http\Controllers\ProductsController::class, 'search'])->name('search');
Route::get('/searchmenu', [App\Http\Controllers\ProductsController::class, 'searchmenu']);




//Route::get('/createcattle', [App\Http\Controllers\CattleController::class, 'create']);
//Route::post('/storecattle', [App\Http\Controllers\CattleController::class, 'store'])->name('store.cattle');
//Route::get('/cattlelist', [App\Http\Controllers\CattleController::class, 'show']);
//Route::get('/deletecattles/{id}', [App\Http\Controllers\CattleController::class, 'destroy']);
//Route::post('/updatecattles/{cattle}', [App\Http\Controllers\CattleController::class, 'update'])->name('update.cattle');
//Route::get('/editcattles/{id}', [App\Http\Controllers\CattleController::class, 'edit']);




Route::get('/homepage', [App\Http\Controllers\UserController::class, 'mainpage']);
Route::get('/customercattle', [App\Http\Controllers\ProductsController::class, 'cattles']);
Route::get('/customerproducts', [App\Http\Controllers\UserController::class, 'products']);
Route::get('/createorder/{id}', [App\Http\Controllers\OrdersController::class, 'create']);
Route::post('/storeorder', [App\Http\Controllers\OrdersController::class, 'store'])->name('store.order');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/createorder/{id}', [App\Http\Controllers\OrdersController::class, 'create']);
Route::get('/adminview', [App\Http\Controllers\OrdersController::class, 'adminview']);
Route::get('/userview', [App\Http\Controllers\OrdersController::class, 'userview']);
Route::get('/deleteorder/{id}', [App\Http\Controllers\OrdersController::class, 'destroy']);



//Route::post('updateabout/{pgcoms}', [CMs\AboutUsController::class, 'update'])->name('update_aboutus');

Auth::routes();

