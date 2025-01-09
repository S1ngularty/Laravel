<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Redirect;

class bookController extends Controller
{
    public function store(){
        $sample_book = new Book();
        $sample_book -> book_name='Kimetsu no Yaiba';
        $sample_book->genre='Action';
        $sample_book -> price =599.70;
        $sample_book-> save();
       return Redirect::route('home');
    }
}
