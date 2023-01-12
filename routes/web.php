<?php

use App\Http\Controllers\SimpleUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ForgetPasswordController;

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

//Route::get("/", function () {
//    return view("welcome");
//});

Route::get('/', [SimpleUserController::class, 'index'])->name('start');
Route::get('user-listing', [SimpleUserController::class, 'index'])->name('userListing');
Route::get('create-user', [SimpleUserController::class, 'create'])->name('userCreate');
Route::post('save-user', [SimpleUserController::class, 'store'])->name('userSave');
Route::get('show-user/{user}', [SimpleUserController::class, 'show'])->name('userShow');

Route::middleware(["auth:sanctum", "verified"])
    ->get("/dashboard", function () {
        return view("dashboard");
    })
    ->name("dashboard");
Route::get('users/approved/{user}',[UserController::class,'approved'])->name('users.approve');
Route::resources([
    "users" => UserController::class,
    "companies" => CompanyController::class,
]);

Route::get("forget-password", [
    ForgetPasswordController::class,
    "showForgetPasswordForm",
])->name("forget.password.get");
Route::post("forget-password", [
    ForgetPasswordController::class,
    "submitForgetPasswordForm",
])->name("password.email");
Route::get("reset-password", [
    ForgetPasswordController::class,
    "showResetPasswordForm",
])->name("reset.password.get");
Route::post("reset-password", [
    ForgetPasswordController::class,
    "submitResetPasswordForm",
])->name("reset.password.post");
