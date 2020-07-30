<?php

namespace App\Http\Controllers;

use App\Capacitacion;
use App\Http\Resources\CapacitacionCollection;
use App\Http\Resources\Capacitacion as CapacitacionResource;
use Illuminate\Http\Request;

class CapacitacionController extends Controller
{
public function index(){
    return new CapacitacionCollection(Capacitacion::paginate());
}
public function show(Capacitacion $capacitacion){
    return response()->json(new CapacitacionResource($capacitacion),200);
}
public function store (Request $request){
    $capacitacion= Capacitacion::create($request->all());
    return response()->json($capacitacion,201);
}
public function update (Request $request, Capacitacion $capacitacion){
    $capacitacion->update($request->all());
    return response()->json($capacitacion,200);
}
public function delete (Capacitacion $capacitacion)
{
    $capacitacion ->delete();
    return response()->json(null,204);
}
}
