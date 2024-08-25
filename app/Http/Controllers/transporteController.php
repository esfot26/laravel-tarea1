<?php

namespace App\Http\Controllers;

use App\Models\transporte;


class transporteController extends Controller
{
    //
    public function crearTransporte(){
        //'tipo','matricula','combustion','modelo','marca','capacidad' 
        $tipo='Motocicleta';
        $matricula='WQE 490';
        $combustion='Nafta';
        $modelo='Navi';
        $marca='Honda';
        $capacidad='2 personas';


        $transporte=transporte::create([
            'tipo'=>$tipo,
            'matricula'=>$matricula,
            'combustion'=>$combustion,
            'modelo'=>$modelo,
            'marca'=>$marca,
            'capacidad'=>$capacidad
        ]);
        return response()->json(['message'=>'Transporte creado correctamente','transporte'=>$transporte]);
    }

    public function verTransportes(){
        $transporte= transporte::all();
        return response()->json(['message'=>'Ver todos los transportes','transporte'=>$transporte]);
    }

    public function mostrarTransporte($id){
        $transporte = transporte::find($id);
    
        if ($transporte) {
            return response()->json(['message' => 'El transporte buscado es:', 'transporte' => $transporte]);
        } else {
            return response()->json(['message' => 'Transporte no encontrado'], 404);
        }
    }

    public function eliminarTransporte($id){
        $transporte = transporte::find($id);
        if ($transporte) {
            $transporte->delete();
            return response()->json(['message' => 'El transporte ha sido eliminado correctamente']);
        } else {
            return response()->json(['message' => 'El transporte no ha sido eliminado correctamente'], 404);
        }
    }


    public function editarTransporte() {
        $transporte = transporte::where('id','2')
        ->first();
        $tipo='Motocicleta';
        $matricula='WQE 490';
        $combustion='Nafta';
        $modelo='Navi';
        $marca='Honda';
        $capacidad='2 personas';
        $transporte->update([
            'tipo'=>$tipo,
            'matricula'=>$matricula,
            'combustion'=>$combustion,
            'modelo'=>$modelo,
            'marca'=>$marca,
            'capacidad'=>$capacidad
        ]);
        return response()->json(['message' => 'El transporte ha sido actualizado correctamente']);
    }
    
}
