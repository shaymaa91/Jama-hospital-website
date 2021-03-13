<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\AppointmentController ;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Auth\ChangePasswordController;



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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomePageController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::prefix("admin")->middleware(['auth'])->group(function(){    
//     Route::get("/",[HomeController::class,'index']);
    
//     Route::resource("user",UserController::class);
//     Route::get("user/{id}/delete",[UserController::class,'destroy'])->name("users.delete");
   
// });
Route::group(['middleware' => ['auth','role:admin'],'prefix'=>'admin'], function () {
    Route::get("/",[HomeController::class,'index']);

Route::resource("user",UserController::class);
Route::get("user/{id}/delete",[UserController::class,'destroy'])->name("users.delete");

Route::get("change-pass",[ChangePasswordController::class,'edit'])->name("password.edit");
Route::post("change-pass",[ChangePasswordController::class,'update'])->name("password.changed");

Route::get("profile",[UserProfileController::class,'edit'])->name("profile.edit");
Route::put("profile",[UserProfileController::class,'update'])->name("profile.update");
Route::resource("doctor",DoctorController::class);
Route::get("doctor/{id}/delete",[DoctorController::class,'destroy'])->name("doctor.delete");
Route::get("dashboard",[dashboardController::class,'index']);
Route::resource("appointment",AppointmentController::class);
});

Route::group(['middleware' => ['auth','role:doctor'],'prefix'=>'doctor'], function () {

});

Route::group(['middleware' => ['auth','role:patient'],'prefix'=>'patient'], function () {

});