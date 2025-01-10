<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Redirect;

class bookController extends Controller
{
   public function store (Request $book){
    $nbook = new book();
    $nbook -> book_name = $book['book_name'];
    $nbook -> genre = $book['book_genre'];
    $nbook -> price = $book['book_price'];
    $nbook->save();

    return Redirect::route('home');
   }
}
