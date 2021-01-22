<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public static function getUserData()
    {
        $clientId = session()->get('clientId');
        $user = DB::select("select * from users where clientId=\"$clientId\"");

        return $user;
    }
}
