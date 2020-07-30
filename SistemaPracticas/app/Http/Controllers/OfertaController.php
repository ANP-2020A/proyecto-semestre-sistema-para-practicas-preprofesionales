<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfertaCollection;
use App\Http\Resources\Oferta as OfertaResource;
use App\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class OfertaController extends Controller
{
    //
public function index(){
    return new OfertaCollection(Oferta::paginate());
}
public function show(Oferta $oferta){
    return response()->json(new OfertaResource($oferta),200);
}

public function store(Request $request){
   /* $messages = [
        'unique'=> 'Este :attribute ya existe',
        'required' => 'El campo :attribute es obligatorio.',
    ];
    $request->validate([
        'nombre' => 'required|string|unique:ofertas|max:255',
        'descripcion' => 'required'
    ], $messages);*/

    //Solo funciona con validator, si se requiere hace la prueba
    //con validate comentar la linea 32 a la 37 y descomentar linea 21 a 28
    $validator = Validator::make($request->all(), [
        'nombre' => 'required|string|unique:ofertas|max:255',
        'descripcion' => 'required']);
    if($validator->fails()){
        return response()->json(['error'=>'data_validation_failed', "error_list"=>$validator->errors()], 422);
    }

    $oferta=Oferta::create($request->all());
    return response()->json($oferta,201);
}
public function update(Request $request,Oferta $oferta){
    $oferta->update($request->all());
    return response()->json($oferta,200);
}
public function delete(Oferta $oferta){
    $oferta->delete();
    return response()->json(null,204);
}
}
