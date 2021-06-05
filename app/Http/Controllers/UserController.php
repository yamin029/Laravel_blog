<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //
    function home(){
        return view('HomePage');
    }

    function about(){
        return view('AboutPage');
    }

    function contact(){
        return view('ContactPage');
    }

    function name($namevalue){
        return $namevalue;
    }
    function fullName($fistName,$middleName,$lastName){
        return "First Name:" . $fistName . "<br>Middle Name:" . $middleName . "<br>Last Name:" . $lastName;
    }
}
