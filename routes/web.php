<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\PostController;

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

/*this file contains the path for the application, what is typed in the URL will be taken care of
by tracking here */

/*the get method if the url is login, points to the AuthController class calling the Login method*/
Route::get('login', [AuthController::class,'Login']);

/*post method in login, redirected to class AuthController method PostLogin*/
Route::post('login', [AuthController::class,'PostLogin']);

/*if the user's url is register, it will be redirected to the Register page/class*/
Route::get('register', [AuthController::class,'Register']);

/*if the url registers register with the post method, it will be redirected to the PostRegister method*/
Route::post('register', [AuthController::class,'PostRegister']);

/*root access application or web, as the initial appearance of the web*/ 
Route::get('/', [AuthController::class,'Index']);

/*to logout, will be redirected to the Logout method*/
Route::post('logout', [AuthController::class,'Logout']);

//post url to search, will be redirected to the search method in the AuthController
Route::post('search', [AuthController::class,'Search']);

//url profile get, redirected to the Profile method
Route::get('profile', [AuthController::class,'Profile']);
//post profile url, redirected to the UpdateProfile method
Route::post('profile', [AuthController::class,'UpdateProfile']);
//url deleteprofile post, redirected to method DeleteProfile
Route::post('deleteprofile', [AuthController::class,'DeleteProfile']);

//url post, redirected to method Index
Route::get('post', [PostController::class,'index']);