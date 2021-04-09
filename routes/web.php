<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\SpecializeController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Doctor\DoctorProfileController;
use App\Http\Controllers\Admin\JamaNewsController;






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
Route::get('/',[HomePageController::class,'index'])->name("front.home.page");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix("admin")->middleware(['auth','role:admin'])->group(function(){
    Route::get("/",[HomeController::class,'index']);

    Route::resource("Specialize",SpecializeController::class);
    Route::get("Specialize/{id}/delete",[SpecializeController::class,'destroy'])->name("Specialize.delete");


    Route::resource("user",UserController::class);
    Route::get("user/{id}/delete",[UserController::class,'destroy'])->name("users.delete");

    Route::get("change-pass",[ChangePasswordController::class,'edit'])->name("password.edit");
    Route::post("change-pass",[ChangePasswordController::class,'update'])->name("password.changed");

    Route::get("profile",[UserProfileController::class,'edit'])->name("profile.edit");
    Route::put("profile",[UserProfileController::class,'update'])->name("profile.update");

    Route::resource("doctors",DoctorController::class);
    Route::get("doctors/{id}/delete",[DoctorController::class,'destroy'])->name("doctors.delete");

    Route::resource("patients",PatientController::class);
    Route::get("patients/{id}/delete",[PatientController::class,'destroy'])->name("patient.delete");

    Route::resource("news",JamaNewsController::class);
    Route::get("news/{id}/delete",[JamaNewsController::class,'destroy'])->name("news.delete");
});

// Route::prefix("doctor")->middleware(['auth','role:doctor'])->group(function(){
//     Route::get("/",[DoctorProfileController::class,'index']);


// });

// Route::prefix("doctor")->middleware(['auth','role:patient'])->group(function(){
//     Route::get("/",[DoctorProfileController::class,'index']);


// });

