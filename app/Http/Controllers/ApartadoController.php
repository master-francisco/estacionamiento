<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
use Auth;
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

public function createApartado(Request $request){
    $space = new Space();
    $data = $request->all();
    $nombre= $request->get('nombre-lugar');
    $space->user_id=$data['id'];
    $space->save();
    return redirect()->back();
}
}