<?php

namespace App\Http\Controllers;

use App\EstudiantePostulacion;
use App\Http\Resources\EstudiantePostulacionCollection;
use App\Http\Resources\EstudiantePostulacion as EstudiantePostulacionResource;
use Illuminate\Http\Request;

class EstudiantePostulacionController extends Controller
{
    //
public function index(){
    return new EstudiantePostulacionCollection(EstudiantePostulacion::paginate());
}
public function show(EstudiantePostulacion $estudiante_postulacion){
    return response()->json(new EstudiantePostulacionResource($estudiante_postulacion),200);
}
public function store(Request $request){
    $estudiante_postulacion=EstudiantePostulacion::create($request->all());
    return response()->json($estudiante_postulacion,201);
}
public function update(Request $request,EstudiantePostulacion $estudiante_postulacion){
    $estudiante_postulacion->update($request->all());
    return response()->json($estudiante_postulacion,200);
}
public function delete(EstudiantePostulacion $estudiante_postulacion){
    $estudiante_postulacion->delete();
    return response()->json(null,204);
}
}
