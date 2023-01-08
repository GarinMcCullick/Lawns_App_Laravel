<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ServicerPagesController extends Controller
{
    public static function sessionServicerUsername()
    {
        if (Session::has('user')) {
            return session('user')['username'];
        } else return '';
    }
}
