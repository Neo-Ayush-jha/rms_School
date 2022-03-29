<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AuthController;
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


Route::prefix('admin')->group(function(){
    Route::get("/",[AdminController::class , "home"])->middleware(['auth'])->name("admin.dashboard");
    Route::resource("school",App\Http\Controllers\SchoolController::class);   
    Route::resource("student",App\Http\Controllers\StudentController::class);   
});
// Route::redirect("/","/student");
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix("school")->group(function(){
    Route::get("/",[SchoolController::class,"home"])->name("school.dashboard");
    Route::get( "/login",[SchoolController::class,"login"]);
    Route::get( "/logout",[AuthController::class,"schoolLogout"])->name('school.logout');
    Route::post( "/login",[AuthController::class,"schoolLogin"])->name('school.login');
});
// Route::resource('student',App\Http\Controllers\StudentController::class)->middleware(['auth']);
// Route::get('/insert',[StudentController::class,"create"])->name("create");
// Route::post('/store',[StudentController::class,"store"])->name("store");
// Route::post('/update',[StudentController::class,"update"])->name("update");
// Route::get('/edit',[StudentController::class,"edit"])->name("edit");
// Route::get('/delete/{id}',[StudentController::class,"delete"])->name("delete");