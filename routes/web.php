<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\bookController;

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
;

Route::get('/item/store',[ItemController::class,'store'], function(){
    return "stored successfully";
})-> name('item/store');

Route::get('/book/store',[bookController::class, 'store']
)->name('book/store');