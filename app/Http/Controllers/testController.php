<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function show(){
        $user = [
            'Firstname' => 'Levi Asher',
            'Lastname' => 'Penaverde'
        ];
        return view('test',['user' => $user]);
    }
   
}
