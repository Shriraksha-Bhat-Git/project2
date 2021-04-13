<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellbooksController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::view('/','bookreselling.home');
Route::view('/admin','bookreselling.admin');
Route::view('/userlogin','bookreselling.userlogin');
Route::view('/a-viewbooks','bookreselling.a-viewbooks');
Route::view('/u-viewbooks','bookreselling.u-viewbooks');
Route::view('/register','bookreselling.register');
Route::view('/sellbooks','bookreselling.sellbooks');
Route::view('/mybooks','bookreselling.mybooks');
Route::view('/mycart','bookreselling.mycart');
Route::view('/myorders','bookreselling.myorders');
Route::view('/a-vieworders','bookreselling.a-vieworders');
Route::view('/a-viewusers','bookreselling.a-viewusers');
Route::view('/payment','bookreselling.payment');
Route::view('/creditcard','bookreselling.creditcard');
Route::view('/cod','bookreselling.cod');
Route::view('/message','bookreselling.message');


Route::resource('sellbooks', SellbooksController::class);
