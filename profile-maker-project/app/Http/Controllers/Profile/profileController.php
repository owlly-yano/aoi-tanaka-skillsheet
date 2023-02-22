<?php

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function showskillsheet(){
        return view('profile.index');
    }

    public function getProfile(){
        return view('Profile.profile');
    }
}
