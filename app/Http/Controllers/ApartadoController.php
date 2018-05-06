<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartadoController extends Controller
{
 
public function index(){
    return view('user.apartado');
}
}