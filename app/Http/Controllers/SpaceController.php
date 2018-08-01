<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
use App\SpaceInformation;
use Illuminate\Support\Facades\Input;
class SpaceController extends Controller
{

    public function getSpaces()
    {
        $space = Space::orderBy('created_at', 'asc')->get();
        return view('user.apartado', ['space' => $space]);
    }
    public function getindex(){
        return view('user.spaces');
    }
    public function updateVehicle(Request $request){
        $user = User::where('name','=',Input::get('name'));
        $vehiculo = Vehicle::where('user_id','=',$user->id)->first();
        $placas = $request->get('placas');
        
        if($placas !=null){
            $vehiculo->placas=$placas;
        }
        if(!$vehiculo->save()){
            Toastr::success("El vehiculo no se actualizado  correctamente");  
        }else{
            $vehiculo->save();
            Toastr::success("El vehiculo se actualizado  correctamente");
        }
        return redirect()->back();
    }
    public function updateUser(Request $request){
        $user = User::where('name','=',Input::get('name'));
        $informacion = User::where('id','=',$user->id)->first();
        $name=$request->get('name');
        if($name != null){
        $informacion->name=$name;
        }
        if(!$informacion->save()){
            Toastr::success("El usuario no se actualizado  correctamente");
        }else{
            $informacion->save();
            Toastr::success("El usuario se actualizado  correctamente");
        }
       
        return redirect()->back();
    }
    private function createVehicle(Request $request){
        $vehicle = new Vehicle;
        $vehicle->fill($request->all());
        $vehicle->save();
    }
    private function createInformation(Request $request){
        $space = new SpaceInformation;
        $space->fill($request->all());
        $space->save();
    }
    private function createSpace(){
        $user = User::where('name','=',Input::get('name'));
        $nombre= $request->get('id_lugar');
        $space = Space::where('id','=',$nombre)->first();
        $space ->user_id = $user->id;
        $space->save();
    }
    public function UpdateSpaceInformation(){
        $information = SpaceInformation::where('space_id','=',Input::get('id_lugar'))->first();
        $hora_entrada = $request->get('hora_entrada');
        $hora_salida = $request->get('hora_salida');
        $tiempo = $request->get('tiempo');
        $status = $request->get('status');

        if($hora_entrada != null){
            $information -> hora_entrada = $hora_entrada;
        }
        if($hora_salida != null){
            $information ->hora_salida = $hora_salida;
        }
        if($tiempo != null){
            $information -> tiempo = $tiempo;
        }
        if($status != null){
            $information -> status = $status;
        }
        return redirect()->back();
    }
    public function updateSpace(Request $request){
        $user = User::where('name','=',Input::get('name'));
        if(!$this->spaceInformationExists()){
            $request->request->add(['space_id'=> Input::get('id_lugar')]);
            $this->createInformation($request);
            if(!$this->vehicleExists()){
                $request->request->add(['user_id'=>$user->id]);
                $this->createVehicle($request);
            }
            $this->createSpace();
        }else if($request->has('hora_entrada') || $request->has('hora_salida') ||$request->has('name') ||$request->has('tiempo') ||$request->has('status') || $request->has('placas')){
            $this->UpdateSpaceInformation($request);
        }
        return redirect()->back();
    }
    public function spaceInformationExists(){
        return (SpaceInformation::where('space_id','=',Input::get('id_lugar'))->first() !=null);
    }
    public function vehicleExists(){
        return (Vehicle::where('user_id','=',Input::get('user'))->first() !=null);
    }
}
