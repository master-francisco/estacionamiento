<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
class SpacesController extends Controller
{

    public function getSpaces()
    {
        $space = Space::orderBy('created_at', 'asc')->get();
        return view('user.apartado', ['space' => $space]);
    }
    public function getindex(){
        return view('user.spaces');
    }
    private function createInformation(Request $request){
        $space = new Space;
        $space->fill($request->all());
        $space->save();
    }
    public function UpdateSpaceInformation($space_id){
        $information = Space::where('space_id','=',$space_id)->first();
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
    public function updateSpace(Request $request,$space_id){
        if(!$this->spaceInformationExists($space_id)){
            $request->request->add(['user_id'=> $space_id]);
            $this->createInformation($request);
        }else if($request->has('hora_entrada') || $request->has('hora_salida') || $request->has('tiempo') ||$request->has('status')){
            $this->UpdateSpaceInformation($space_id);
        }
        return redirect()->back();
    }
    public function spaceInformationExists($space_id){
        return (Space::where('space_id','=',$space_id)->first() !=null);
    }
}
