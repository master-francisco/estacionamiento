<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
class ApartadoController extends Controller
{
 
public function index(){
    return view('user.apartado');
}
public function getApartadoA()
{
    $apartado = Space::with(['user.vehicle', 'spaceInfo'])->get();
    return view('user.apartado', ['apartado' => $apartado]);
}

}