<?php

use App\Http\Controllers\CustPagesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post("user", [CustPagesController::class, 'Login']);
Route::view("login", 'login');


Route::get('/landing', function () {
    return view('cust_landing') . view('hamburger_menu');
});

Route::get('/refer_a_friend', function () {
    return view('refer_a_friend') . view('hamburger_menu');
});

Route::get('/orders', function () {
    return view('user_orders') . view('hamburger_menu');
});

Route::get('/profile', function () {
    return view('user_profile') . view('hamburger_menu');
});

Route::get('/settings', function () {
    return view('user_settings') . view('hamburger_menu');
});

Route::get('/wallet', function () {
    return view('wallet') . view('hamburger_menu');
});
