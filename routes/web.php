<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/store',[ItemController::class,'store'], function(){
    return "stored successfully";
})-> name('store');

