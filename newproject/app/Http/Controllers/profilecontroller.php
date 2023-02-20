<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class profilecontroller extends Controller
{

    public function inputskillsheet(){
    return view('index');
}
    public function outputskillsheet(){
        $profile=member::get();

        return view('profile')
          -> with('profile', $profile[0]);
}
}