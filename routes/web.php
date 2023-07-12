<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\GroupController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'AuthRegister']);

Route::get('login',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'AuthLogin']);

Route::group(['middleware' => 'admin'],function(){
    Route::get('/admindashboard',[AdminDashboardController::class,'index']);
    Route::get('/admindashboard',[AdminDashboardController::class,'index']);
    Route::get('userdetails',[AdminDashboardController::class,'userdetails']);
    Route::get('deleteadmindata/{id}',[AdminDashboardController::class,'deleteadmindata']);
    Route::get('displayadmindetailspage/{id}',[AdminDashboardController::class,'DisplayAdminDetailsPage']);
    Route::post('/updateadmindetails/{id}',[AdminDashboardController::class,'updateadmindetails']);
    Route::get('admin/logout',[AdminDashboardController::class,'logout']);
});


Route::group(['middleware' => 'user'],function(){
    Route::get('user/userdashboard',[UserDashboardController::class,'index']);
    Route::get(' user/userlogout',[UserDashboardController::class,'userlogout']);
    Route::get('user/yourdetails',[UserDashboardController::class,'showuserdetails']);
    Route::get('user/displayuserdetailspage',[UserDashboardController::class,'DisplayUserDetailsPage']);
    Route::post('user/updateuserdetails',[UserDashboardController::class,'updateuserdetails']);
    Route::get('user/deleteuserdetails',[UserDashboardController::class,'deleteuserdetails']);
    Route::get('user/usergroupspage',[GroupController::class,'index']);
    Route::get('user/creategroup',[GroupController::class,'creategroup']);
    Route::get('user/viewgroups/{id}',[GroupController::class,'viewgroup']);

});



// Route::get('manageadmin',[DashboardController::class,'manageadmin']);





