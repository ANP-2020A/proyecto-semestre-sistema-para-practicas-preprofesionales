<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    //
public function index(){
    return Empresa::all();
}
public function show(Empresa $empresa){
    return $empresa;
}
public function store(Request $request){
    $empresa= Empresa::create($request->all());
    return response()->json($empresa,201);
}
public function update(Request $request,Empresa $empresa){
    $empresa->update($request->all());
    return response()->json($empresa,200);
}
public function delete(Empresa $empresa){
    $empresa->delete();
    return response()->json(null,204);
}
}
