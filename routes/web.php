<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\bookController;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test/{fname}/{lname}', function ($fname, $lname){
    $data = [
    'fname' => $fname,
    'lname' => $lname
    ];
 return view('test',$data);

})->name('test')
->where('fname', '[A-Za-z\-]+')
->where('lname', '[A-Za-z\-]+');


Route::get('book/create1',function (){
return view('book');
})->name('book.create');

Route::get('book/create',[bookController::class, 'store'])->name('book.store');

Route::get('product/create', function(){
    return view('products');
})->name('product.create');

Route::get('product/store',[productController::class,'store'])->name('product.store');

Route::get('product/index', [productController::class,'index'])->name('product.index');

Route::get('edit/{id}',[productController::class,'edit'])->name('product.edit');