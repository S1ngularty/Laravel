<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\customer;

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

});