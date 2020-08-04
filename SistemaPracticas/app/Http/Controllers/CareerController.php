<?php

namespace App\Http\Controllers;

use App\Career;
use App\Http\Resources\CareerCollection;
use App\Http\Resources\Career as CareerResource;
use DemeterChain\c;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function index(){
        return new CareerCollection(Career::paginate());
    }
    public function show(Career $Career){
        return response()->json(new CareerResource($Career),200);
    }
    public function store(Request $request){
        $Career= Career::create($request->all());
        return response()->json($Career,201);
    }
    public function update(Request $request,Career $Career){
        $Career->update($request->all());
        return response()->json($Career,200);
    }
    public function delete(Career $Career){
        $Career->delete();
        return response()->json(null,204);
    }
}
