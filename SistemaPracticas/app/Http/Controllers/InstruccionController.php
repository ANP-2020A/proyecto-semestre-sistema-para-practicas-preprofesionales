<?php

namespace App\Http\Controllers;

use App\Instruccion;
use Illuminate\Http\Request;

class InstruccionController extends Controller
{
    //
public function index(){
    return Instruccion::all();
}
public function show(Instruccion $instruccion){
    return $instruccion;
}
public function store(Request $request){
    $instruccion= Instruccion::create($request->all());
    return response()->json($instruccion,201);
}
public function update(Request $request, Instruccion $instruccion){
    $instruccion->update($request->all());
    return response()->json($instruccion,200);
}
public function delete(Instruccion $instruccion){
    $instruccion ->delete();
    return response()->json(null,204);
}
}
