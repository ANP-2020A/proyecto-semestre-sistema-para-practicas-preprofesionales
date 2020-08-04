<?php

namespace App\Http\Controllers;

use App\Http\Resources\InternCollection;
use App\Http\Resources\Intern as InternResource;
use App\Intern;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function index(){
        return new InternCollection(Intern::paginate());
    }
    public function show(Intern  $Intern){
        return response()->json(new InternResource($Intern),200);
    }
    public function store(Request $request){
        $Intern= Intern::create($request->all());
        return response()->json( $Intern,201);
    }
    public function update(Request $request,Intern $Intern){
        $Intern->update($request->all());
        return response()->json($Intern,200);
    }
    public function delete(Intern  $Intern){
        $Intern ->delete();
        return response()->json(null,204);
    }
}
