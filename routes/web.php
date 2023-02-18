<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\AdminDashboardcontroller;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\Admincontroller;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CONTACTS CRUD BY CLIENTS
Route::get('contacts',[ContactController::class,'index'])->middleware('auth')->name('contacts');

Route::get('form', [ContactController::class, 'create'])->middleware('auth');

Route::post('form', [ContactController::class, 'store'])->middleware('auth');

Route::get('update/{id}', [ContactController::class, 'edit'])->middleware('auth')->name('edit');

Route::put('update/{id}', [ContactController::class, 'update'])->middleware('auth')->name('update');

Route::get('delete/{id}', [ContactController::class, 'destroy'])->middleware('auth')->name('delete');

Route::get('details/{id}', [ContactController::class, 'show'])->middleware('auth')->name('details');


// ADMIN USER CRUD APIS
Route::get('admin', [AdminDashboardcontroller::class, 'index'])->middleware('auth')->name('admin');

Route::get('users',[UserController::class,'index'])->middleware('auth')->name('users');

Route::get('user-form', [UserController::class, 'create'])->middleware('auth');

Route::post('user-form', [UserController::class, 'store'])->middleware('auth');

Route::get('user-update/{id}', [UserController::class, 'edit'])->middleware('auth')->name('user-edit');

Route::put('user-update/{id}', [UserController::class, 'update'])->middleware('auth')->name('user-update');

Route::get('user-details/{id}', [UserController::class, 'show'])->middleware('auth')->name('user-details');

Route::get('user-delete/{id}', [UserController::class, 'destroy'])->middleware('auth')->name('user-delete');

Route::get('count', [AdminDashboardcontroller::class, 'count'])->middleware('auth')->name('count');

// ADMIN CONTACT CRUD APIS

Route::get('admin-contacts',[Admincontroller::class,'index'])->middleware('auth')->name('admin-contacts');

Route::get('admin-contact-form', [Admincontroller::class, 'create'])->middleware('auth');

Route::post('admin-contact-form', [Admincontroller::class, 'store'])->middleware('auth');

Route::get('admin-details/{id}', [Admincontroller::class, 'show'])->middleware('auth')->name('admin-details');

Route::get('admin-update/{id}', [Admincontroller::class, 'edit'])->middleware('auth')->name('admin-edit');

Route::put('admin-update/{id}', [Admincontroller::class, 'update'])->middleware('auth')->name('admin-update');

Route::get('admin-delete/{id}', [Admincontroller::class, 'destroy'])->middleware('auth')->name('admin-delete');
