<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ItemsController;
use App\Models\customer;
use App\Models\category;
use App\Models\items;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customer')->group(function (){

    Route::get('/create', function (){
        return view ('customer.create');
    });
    Route::get('/index',[CustomerController::class,'index'])->name('product.index');
    Route::post('/store', [CustomerController::class,'store'])->name('product.store');
    Route::get('/edit/{id}', [CustomerController::class,'edit'])->name('product.edit');
    Route::put('/update/{id}', [CustomerController::class,'update'])->name('product.update');
    Route::get('/destroy{id}', [CustomerController::class,'destroy'])->name('product.destroy');
    Route::get('/restore/{id}', [CustomerController::class,'restore'])->name('product.restore');


});

Route::prefix('items')->group(function(){

    Route::get('/create',[ItemsController::class,'create'])->name('item.create');
    Route::post('/store',[ItemsController::class,'store'])->name('item.store');
    Route::get('/index',[ItemsController::class,'index'])->name('item.index');
    Route::get('/edit/{id}',[ItemsController::class,'edit'])->name('item.edit');
    Route::put('/update/{id}',[ItemsController::class,'update'])->name('item.update');
    Route::get('/destroy/{id}',[ItemsController::class,'destroy'])->name('item.destroy');



});