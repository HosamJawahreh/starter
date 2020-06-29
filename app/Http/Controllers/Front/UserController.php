<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{

    public function showUserName()
    {
        return "Hosam jawahreh";
    }

    public function GetIndex()
    {
        $obj = new \stdClass();
        $obj -> name = 'hosamjawahreh';
        $obj -> id = 1201306;
        $obj -> phone = '0789363354';
        $data = ['hosam ', 'aljawahreh'];

        return view('welcome',compact('data'));
    }
}
