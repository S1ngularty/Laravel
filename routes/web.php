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
    Route::get('/index',[CustomerController::class,'index'])->name('customer.index');
    Route::post('/store', [CustomerController::class,'store'])->name('customer.store');
    Route::get('/edit/{id}', [CustomerController::class,'edit'])->name('customer.edit');
    Route::put('/update/{id}', [CustomerController::class,'update'])->name('customer.update');
    Route::get('/destroy{id}', [CustomerController::class,'destroy'])->name('customer.destroy');
    Route::get('/restore/{id}', [CustomerController::class,'restore'])->name('customer.restore');


});

Route::prefix('items')->group(function(){

    Route::get('/create',[ItemsController::class,'create'])->name('item.create');
    Route::post('/store',[ItemsController::class,'store'])->name('item.store');
    Route::get('/index',[ItemsController::class,'index'])->name('item.index');
    Route::get('/edit/{id}',[ItemsController::class,'edit'])->name('item.edit');
    Route::put('/update/{id}',[ItemsController::class,'update'])->name('item.update');
    Route::get('/destroy/{id}',[ItemsController::class,'destroy'])->name('item.destroy');
    Route::get('/restore/{id}',[ItemsController::class,'restore'])->name('item.restore');

});

Route::prefix('category')-> group(function(){
    Route::get('/index',[categoryController::class,'index'])->name('category.index');
    Route::get('/create',[categoryController::class,'create'])->name("category.create");
    Route::post('/store',[categoryController::class,'store'])->name('category.store');
    Route::get('/edit/[id]',[categoryController::class,' edit'])->name('category.edit');
    Route::put('/update/[id]',[categoryController::class,'update'])->name('category.update');
    Route::get('/destroy/[id]',[categoryController::class,'destroy'])->name('category.destroy');
});