<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Redirect;

class productController extends Controller
{
    public function store (Request $request){
       $product = new products();
       $product -> product_name = $request['product_name'];
       $product -> product_category = $request['product_category'];
       $product -> product_price =$request ['product_price'];
       $product-> save();

       return Redirect::route('home');
    }
}
