<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class CustPagesController extends Controller
{

    public function Login(Request $req)
    {
        $req->session()->put('user', ['username' => $req->get('userName'), 'password' => $req->get('password')]);
        $response = DB::select("SELECT privilege FROM `users` WHERE username=" . "'" . session('user')['username'] . "'");

        $array = json_decode(json_encode($response), true);

        $sessionAuth = $array[0]['privilege'];
        $req->session()->put('user', ['username' => $req->get('userName'), 'password' => $req->get('password'), 'auth' => $sessionAuth]);
        //$req->session()->put('user', ['password' => $data['password']]);

        if (session('user')['password'] == 'password' && session('user')['auth'] == 'cust') { //hard coded password will be in database later
            return redirect('landing'); //redirects to landing if password = password
        } else if (session('user')['password'] == 'password' && session('user')['auth'] == 'admin') {
            return redirect('myLawns');
        } else {
            session()->forget('user'); //if wrong password it clears the user session so on login page after redirecting back it will be clear instead of populated w wrong info
            return redirect('login');
        }
    }
    public static function CustAuthCheck() //checks wether username and password are in session basically must log in
    {
        if (Session::has('user')) {
            if (session('user')['username'] && session('user')['password'] && session('user')['auth'] == 'cust') {
                return 1;
            } else if (session('user')['username'] && session('user')['password'] && session('user')['auth'] == 'admin') {
                return 2;
            }
        } else {
            return 0;
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
    public static function GetAllUsersData()
    {

        $response = DB::select("select * from users");

        $array = json_decode(json_encode($response), true);

        return $array;
    }
    public static function PopulateLanding()
    {
        $response = DB::select("select username, id, charge, rating from users");

        $array = json_decode(json_encode($response), true);

        return $array;
    }
}
