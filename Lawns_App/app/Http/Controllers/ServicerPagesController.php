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
        $user = DB::table('users')->where('username', session('user')['username'])->first();

        return $user->servicerRating;
    }
    public static function PopulateFindAYard()
    {
        $response = DB::select("select username, id, custRating, custBio from users where custBio !=''"); //where servicer bio is not empty

        $array = json_decode(json_encode($response), true);

        return $array;
    }
}
