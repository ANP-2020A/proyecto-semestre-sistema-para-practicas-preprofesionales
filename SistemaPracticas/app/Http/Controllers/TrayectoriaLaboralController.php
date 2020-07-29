<?php

namespace App\Http\Controllers;

use App\TrayectoriaLaboral;
use Illuminate\Http\Request;

class TrayectoriaLaboralController extends Controller
{
    //
public function index(){
    return TrayectoriaLaboral::all();
}
public function show(TrayectoriaLaboral $trayectoria_laboral){
    return $trayectoria_laboral;
}
public function store(Request $request){
    $trayectoria_laboral= TrayectoriaLaboral::create($request->all());
    return response()->json($trayectoria_laboral,201);
}
public function update(Request $request,TrayectoriaLaboral $trayectoria_laboral){
    $trayectoria_laboral->update($request->all());
    return response()->json($trayectoria_laboral,200);
}
public function delete(TrayectoriaLaboral $trayectoria_laboral){
    $trayectoria_laboral->delete();
    return response()->json(null,204);
}
}
