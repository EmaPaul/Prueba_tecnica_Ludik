<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Api\productController;

Route::get('/products', [productController::class, 'all_products']);

Route::get('/products/{id}',[productController::class,'products_by_id']);

Route::post('/products',[productController::class,'create_product']);

Route::patch('/products/{id}',[productController::class,'update_product']);

Route::delete('/products/{id}',[productController::class,'delete_product']);
