<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/normalusers', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/users/{id}/update', [UserController::class, 'update']);
    Route::get('/managers', [\App\Http\Controllers\ManagerController::class, 'index']);
    Route::get('/supervisors', [\App\Http\Controllers\SupervisorController::class, 'index']);
    Route::get('/staffs', [\App\Http\Controllers\StaffController::class, 'index']);
    Route::get('/roles', [\App\Http\Controllers\RoleController::class, 'index']);
});