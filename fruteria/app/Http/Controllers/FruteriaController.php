<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fruteria;
use Illuminate\Support\Facades\DB;

class FruteriaController extends Controller
{

    public function indice(){
        $frutas= DB::table('frutas')
                ->orderBy('id','desc')
                ->get();
        return view('index');
    }

    public function listado_frutas(){
        $frutas= DB::table('frutas')
                ->orderBy('id','desc')
                ->get();
        return view('frutas/listar',['frutas'=>$frutas]);
    }
    

    public function detalles($id){
       // echo $id;
        $fruta = DB::table('frutas')
            ->where('id',$id)->first();
            return view('frutas.detalle',['fruta'=>$fruta]);
    }

    public function borrar($id){
        $fruta = DB::table('frutas')
        ->where('id',$id)->delete();

        $frutas= DB::table('frutas')
                ->orderBy('id','desc')
                ->get();
        return view('frutas/listar',['frutas'=>$frutas]);
         
     }

     //crear la vista de actualizar
     public function actualizar($id){
        $fruta = DB::table('frutas')
            ->where('id',$id)->first();
            return view('frutas.formulario_actualizar',['fruta'=>$fruta]);    
     }

     public function actualizar_fruta(Request $request){
        $id = $request->id; 
       $frutas =DB::table('frutas')
       ->where('id',$id)
       ->update([
           'nombre'=>$request->input('nombre'),
           'descripcion'=>$request->input('descripcion'),
           'precio'=>$request->input('precio'),  
           'fecha'=>date('Y-m-d')      
       ]);
       return view('index');
     }   

     public function nueva_fruta(){
      return view('frutas.nueva_fruta');
     }

     public function save(Request $request){
        $fruta=DB::table('frutas')->insert(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')
        ));
        return view('index');
       }
}
