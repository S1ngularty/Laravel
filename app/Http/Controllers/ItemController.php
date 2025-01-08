<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    public function index(){

    }

    public function store(){    
        $item= new Item();
        $item->item_name = 'ballpen';
        $item->item_price= 10;
        $item->save();
    }
}
