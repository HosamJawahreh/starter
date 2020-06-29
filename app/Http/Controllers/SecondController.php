<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller{



    public function showString ()
    {
        return"Static String";

    }
    public function showString1 ()
{
    return"Static String1";
}


}
