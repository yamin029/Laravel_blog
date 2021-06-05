<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/',function(){
//     return view('HomePage');
// });

// Route::get('/about',function(){
//     return view('AboutPage');
// });

// Route::get('/contact',function(){
//     return view('ContactPage');
// });

Route::get('/', [UserController::class, 'home']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/name/{namevalue}', [UserController::class, 'name']);
Route::get('name/{firstName}/{middleName}/{lastName}', [UserController::class, 'fullName']);


Route::group(['prefix'=> 'account'],function(){
    Route::get('/profile',function(){
        return "Profile";
    });
    Route::get('/login',function(){
        return "Login";
    });
    Route::get('/logout',function(){
        return "Logout";
    });
    Route::get('/signup',function(){
        return "SignUP";
    });
});