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
    public static function GetRating()
    {
        $user = DB::table('users')->where('username', 'garin')->first();

        return $user->rating;
    }
}
