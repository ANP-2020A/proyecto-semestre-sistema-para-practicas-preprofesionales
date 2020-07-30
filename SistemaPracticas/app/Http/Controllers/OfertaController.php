<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfertaCollection;
use App\Http\Resources\Oferta as OfertaResource;
use App\Oferta;
use Illuminate\Http\Request;

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
