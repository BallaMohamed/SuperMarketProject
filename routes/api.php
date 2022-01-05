<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserContoller;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\OrderController;


Route::post('login', [ApiUserContoller::class , 'login']);
Route::post('register',  [ApiUserContoller::class , 'register']);
Route::group(['middleware' => 'auth:api'], function(){

        Route::get('details',  [ApiUserContoller::class , 'details']);
        Route::get('getProducts' , [ProductApiController::class , 'getProducts']);
        Route::get('getProductsDepentOnCategory/{name}' , [ProductApiController::class , 'getProductsDepentOnCategory']);
        Route::get('getCategory' , [ProductApiController::class , 'getCategory']);
        Route::post('order' , [OrderController::class , 'MakeOreder']);
        Route::get('getUserPoint' , [ApiUserContoller::class , 'getPoint']);
        Route::get('getOrderStatus/{id}' , [OrderController::class , 'getOrderStatus'] );
        Route::get('getUserOrders' , [ApiUserContoller::class , 'getUserOrders']);
        Route::get('getOrderDetails/{id}' ,[OrderController::class , 'getOrderDetails'] );
});




