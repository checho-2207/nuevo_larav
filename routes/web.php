<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\OperacionesController;


 Route::get('/products',[ProductController::class,'index']);
 Route::get('/Product/create',[ProductController::class,'create']);
 Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

 Route::get('/providers',[ProductController::class,'index']);
 Route::get('/provider/create',[ProductController::class,'create']);
 Route::post('/provider/store',[ProductController::class,'store'])->name('proveedor.store');