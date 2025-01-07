<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function user_profile(){
        $profile=[
            'fname' => 'Norleen',
            'lname' => 'Estipular',
            'contact' => '09385736287'
        ];
        return view('profile', ['test'=> $profile]);
    }

}
