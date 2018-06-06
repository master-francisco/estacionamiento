<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use Auth;
use App\User;
use \Toastr;
class VehicleController extends Controller
{

    public function ActualizarVehiculo(Request $request){
        $informacion = Vehicle::where('user_id','=',Auth::user()->id)->first();
        $marca=$request->get('marca');
        $modelo=$request->get('modelo');
        $color=$request->get('color');
        $placas=$request->get('placas');
        $año=$request->get('año');
        if($marca != null){
        $informacion->marca=$marca;
        }
        if($modelo != null){
            $informacion->modelo=$modelo;
        }
        if($color != null){
            $informacion->color=$color;
        }
        if($placas != null){
            $informacion->placas=$placas;
        }
        if($año != null){
            $informacion->año=$año;
        }
        if(!$informacion->save()){
        }
        Toastr::success("La información del vehiculo se actualizado  correctamente");
            $informacion->save();
        return redirect()->back();
    }
    private function createVehiculo(Request $request){
        if(Vehicle::where('user_id','=',Auth::user()->id)->first() == null){
            $vehicle = new Vehicle;
            $vehicle->fill($request->all());
            $vehicle->save();
        }
    }
    public function updateVehicle(Request $request)
    {

    if (!$this->VehicleExists()) {
        $request->request->add(['user_id'=> Auth::user()->id]);
        $this->createVehiculo($request);
    }
    else if($request->has('marca') || $request->has('modelo')||$request->has('color')||$request->has('placas')||$request->has('año')){
        $this->ActualizarVehiculo($request);
    }
    return redirect()->back();
}
private function VehicleExists(){
    return (Vehicle::where('user_id', '=', Auth::user()->id)->first() != null);
    }
}

