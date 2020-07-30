<?php

namespace App\Http\Controllers;

use App\Habilidad;
use App\Http\Resources\HabilidadCollection;
use App\Http\Resources\Habilidad as HabilidadResource;
use Illuminate\Http\Request;

class HabilidadController extends Controller
{
    //
public function index(){
    return new HabilidadCollection(Habilidad::paginate());
}
public function show(Habilidad $habilidad){
    return response()->json(new HabilidadResource($habilidad),200);
}
public function store(Request $request){
    $habilidad= Habilidad::create($request->all());
    return response()->json($habilidad,201);
}
public function update(Request $request,Habilidad $habilidad){
    $habilidad->update($request->all());
    return response()->json($habilidad,200);
}
public function delete(Habilidad $habilidad){
    $habilidad->delete();
    return response()->json(null,204);
}
}
