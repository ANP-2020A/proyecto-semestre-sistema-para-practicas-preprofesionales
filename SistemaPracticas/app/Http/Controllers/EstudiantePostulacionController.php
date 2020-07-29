<?php

namespace App\Http\Controllers;

use App\EstudiantePostulacion;
use Illuminate\Http\Request;

class EstudiantePostulacionController extends Controller
{
    //
public function index(){
    return EstudiantePostulacion::all();
}
public function show(EstudiantePostulacion $estudiante_postulacion){
    return $estudiante_postulacion;
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
