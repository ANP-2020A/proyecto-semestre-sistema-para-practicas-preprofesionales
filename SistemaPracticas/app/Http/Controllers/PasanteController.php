<?php

namespace App\Http\Controllers;

use App\Http\Resources\PasanteCollection;
use App\Http\Resources\Pasante as PasanteResource;
use App\Pasante;
use Illuminate\Http\Request;

class PasanteController extends Controller
{
    //
public function index(){
    return new PasanteCollection(Pasante::paginate());
}
public function show(Pasante  $pasante){
    return response()->json(new PasanteResource($pasante),200);
}
public function store(Request $request){
    $pasante= Pasante::create($request->all());
    return response()->json( $pasante,201);
}
public function update(Request $request,Pasante $pasante){
    $pasante->update($request->all());
    return response()->json($pasante,200);
}
public function delete(Pasante  $pasante){
    $pasante ->delete();
    return response()->json(null,204);
}
}
