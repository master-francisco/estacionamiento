<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
use Auth;
use \Toastr;
use App\User;
use Illuminate\Support\Facades\Input;
class ApartadoController extends Controller
{
 
public function index(){
    return view('user.apartado');
}
public function getApartadoA()
{
    $apartado = Space::with(['user.vehicle','spaceInfo'])->get();
    return view('user.apartado', ['apartado' => $apartado]);
}

public function createApartado(Request $request){
    $nombre= $request->get('lugar');
    $id = $request->get('id');
    $space = Space::where('nombre','=',$nombre)->first();
    if($id == null){
    $space->user_id=Auth::user()->id;
    if($space->save()){
        Toastr::success('Tienes un apartado');
    }else{
        Toastr::warning('No se pudo hacer tu apartado');
    }
    }
    return redirect()->back();
}
}