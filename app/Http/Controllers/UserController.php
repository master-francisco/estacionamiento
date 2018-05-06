<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function imagePost(Request $request){

    }

    public function index()
    {
        return view('user.profile');
    }
    public function inicio(){
        return view('admin.dashboard');
    }
}
