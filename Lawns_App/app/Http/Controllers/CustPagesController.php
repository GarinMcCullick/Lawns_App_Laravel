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


        //print_r($req->get('password'));
        return redirect('landing');
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
}
