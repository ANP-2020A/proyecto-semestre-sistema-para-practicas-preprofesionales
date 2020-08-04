<?php

namespace App\Http\Controllers;

use App\Business;
use App\Http\Resources\BusinessCollection;
use App\Http\Resources\Business as BusinessResource;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){
        return new BusinessCollection(Business::paginate());
    }
    public function show(Business $Business){
        return response()->json(new BusinessResource($Business),200);
    }
    public function store(Request $request){
        $Business= Business::create($request->all());
        return response()->json($Business,201);
    }
    public function update(Request $request,Business $Business){
        $Business->update($request->all());
        return response()->json($Business,200);
    }
    public function delete(Business $Business){
        $Business->delete();
        return response()->json(null,204);
    }
}
