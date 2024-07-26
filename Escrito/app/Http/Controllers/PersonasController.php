<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller{
   public function agregarPersonas(Request $request){
        $personas =new personas();
        $personas -> edad = $request -> post("edad");
        $personas -> telefono = $request -> post("telefono");
        $personas -> nombre = $request -> post("nombre");
        $personas -> apellido = $request -> post("apellido");
        $personas -> save();
        return redirect("/personas");
   }  
   public function eliminarPersonas(Request $request,$id){
     $personas = personas::find($id);
     $personas -> delete();
     return redirect("/personas");}

     public function editarPersonas(Request $request,$id){
        $personas = personas::find($id);
        $personas -> edad = $request -> post("edad");
        $personas -> telefono = $request -> post("telefono");
        $personas -> nombre = $request -> post("nombre");
        $personas -> apellido = $request -> post("apellido");
        $personas -> save();
        return redirect("/personas");}

        public function listarPersonas(Request $request){
        $personas = personas::all();
        return view("listarpersonas",compact("personas"));}
    public function buscarpersonas(Request $request, $id){
        $personas = personas::find($id);
        return view("listarpersonas",compact("personas"));
    }
    
}