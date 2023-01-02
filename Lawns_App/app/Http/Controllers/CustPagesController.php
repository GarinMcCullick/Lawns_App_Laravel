<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustPagesController extends Controller
{

    public function Login(Request $req)
    {
        $req->session()->put('user', ['username' => $req->get('userName'), 'password' => $req->get('password')]);
        //$req->session()->put('user', ['password' => $data['password']]);

        if (session('user')['password'] !== 'password') { //hard coded password will be in database later
            session()->forget('user'); //if wrong password it clears the user session so on login page after redirecting back it will be clear instead of populated w wrong info
            return redirect('login');
        } else {
            return redirect('landing'); //redirects to landing if password = password
        }
    }
    public static function SessionUsername() //this is checking for session details for login info to self populate
    {
        if (Session::has('user')) {
            return session('user')['username'];
        } else return '';
    }
    public static function SessionPassword() //this is checking for session details for login info to self populate
    {
        if (Session::has('user')) {
            return session('user')['password'];
        } else return '';
    }
    public function Logout(Request $request) //this is a logout function that logs user out on session/remove url and redirects to index
    {
        $request->session()->forget('user');
        return redirect('/');
    }
}
