<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get("/",[WelcomeController::class,"index"]);
Route::get("editadmin",[AdminController::class,"index"]);
Route::get("addadmin",[AdminController::class,"create"]);
Route::post("admin/add",[AdminController::class,"store"]);
Route::get("delete/admin/{id}",[AdminController::class,"destroy"]);
Route::get("update/admin/{id}",[AdminController::class,"edit"]);
Route::post("admin/update",[AdminController::class,"update"]);
Route::get("editsite",[SiteController::class,"index"]);
Route::get("delete/site/{id}",[SiteController::class,"destroy"]);
Route::get("addsite",[SiteController::class,"create"]);
Route::post("site/add",[SiteController::class,"store"]);
Route::get("edituser",[UserController::class,"index"]);
Route::get("adduser",[UserController::class,"create"]);
Route::post("user/add",[UserController::class,"store"]);
Route::get("update/user/{id}",[UserController::class,"edit"]);
Route::post("user/update",[UserController::class,"update"]);
Route::get("delete/user/{id}",[UserController::class,"destroy"]);

















