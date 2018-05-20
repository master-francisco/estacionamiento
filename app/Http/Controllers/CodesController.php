<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
class CodesController extends Controller
{
   public function index(){
       return view('admin.code');
   }
   public function createCode(Request $request){
       $code = new Code();
       $data = $request->all();
       $code->code =$data['code'];
       $code->nombre=$data['nombre'];
       $code->email=$data['email'];
       $code->tipo_usuario=$data['tipo_usuario'];

       if(!$code->save()){

       }
       return redirect()->back();
       $code->save();
   }
   public function getCodes(){
    $codes = Code::orderBy('created_at', 'asc')->get();
    return view('admin.settings-code', ['codes' => $codes]);
   }
}
