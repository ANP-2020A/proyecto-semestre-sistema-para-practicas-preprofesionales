<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Empresa;
use App\Http\Resources\CapacitacionCollection;
use App\Http\Resources\Capacitacion as CarreraResource;
use DemeterChain\C;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    //
public function index(){
    return new CapacitacionCollection(Carrera::paginate());
}
public function show(Carrera $carrera){
    return response()->json(new CarreraResource($carrera),200);
}
public function store(Request $request){
    $carrera= Carrera::create($request->all());
    return response()->json($carrera,201);
}
public function update(Request $request,Carrera $carrera){
    $carrera->update($request->all());
    return response()->json($carrera,200);
}
public function delete(Carrera $carrera){
    $carrera->delete();
    return response()->json(null,204);
}
}
