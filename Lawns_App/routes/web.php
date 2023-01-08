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
    if (CustPagesController::CustAuthCheck() === 1) {
        return view('cust_landing') . view('hamburger_menu');
    } else return view('login');
});

Route::get('/refer_a_friend', function () {
    if (CustPagesController::CustAuthCheck() === 1) {
        return view('refer_a_friend') . view('hamburger_menu');
    } else return view('login');
});

Route::get('/orders', function () {
    if (CustPagesController::CustAuthCheck() === 1) {
        return view('user_orders') . view('hamburger_menu');
    } else return view('login');
});

Route::get('/profile', function () {
    if (CustPagesController::CustAuthCheck() === 1) {
        return view('user_profile') . view('hamburger_menu');
    } else return view('login');
});

Route::get('/settings', function () {
    if (CustPagesController::CustAuthCheck() === 1) {
        return view('user_settings') . view('hamburger_menu');
    } else return view('login');
});

Route::get('/wallet', function () {
    if (CustPagesController::CustAuthCheck() === 1) {
        return view('wallet') . view('hamburger_menu');
    } else return view('login');
});

Route::get('/myLawns', function () {
    if (CustPagesController::CustAuthCheck() === 2) {
        return view('myLawns') . view('hamburger_menu');
    } else return view('login');
});

Route::get('session/remove', [CustPagesController::class, 'Logout']);//there is no view for session/remove it just leads to a redirect and a point to hit the logout function
