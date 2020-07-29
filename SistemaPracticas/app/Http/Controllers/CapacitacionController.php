<?php

namespace App\Http\Controllers;

use App\Capacitacion;
use Illuminate\Http\Request;

class CapacitacionController extends Controller
{
public function index(){
    return Capacitacion::all();
}
public function show(Capacitacion $capacitacion){
    return $capacitacion;
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
