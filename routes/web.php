<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategroyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\baymentProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
Route::get('/login' , [LoginController::class , 'login']);
Route::post('/check' , [LoginController::class , 'check']);
Route::get('/home' , [HomeController::class , 'homePage']);
Route::get('/logout' , function(){
    session()->pull('user');
    return redirect('/login');
});
Route::get('/print/{id}' , [OrderController::class , 'print']);
Route::get('/changeStatus/{id}' , [OrderController::class , 'changeStatus']);
Route::resource('/categroies' , CategroyController::class);
Route::resource('/products'  , ProductController::class);
Route::resource('/companies'  , CompanyController::class);
Route::resource('/suppliers' , SuppliersController::class);
Route::resource('/clients' , ClientController::class);
Route::resource('/users'     , UserController::class);
Route::resource('/invoices'  , InvoiceController::class);
Route::resource('bayment' , baymentProductController::class);
Route::resource('/orders' , OrderController::class);

