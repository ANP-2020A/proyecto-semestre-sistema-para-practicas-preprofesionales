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
        $this->authorize('viewAny', Career::class);
        return new CareerCollection(Career::paginate());
    }
    public function show(Career $Career){
        $this->authorize('view', $Career);
        return response()->json(new CareerResource($Career),200);
    }
    public function store(Request $request){
        $this->authorize('create', Career::class);

        $Career= Career::create($request->all());
        return response()->json($Career,201);
    }
    public function update(Request $request,Career $Career){
        $this->authorize('update', $Career);

        $Career->update($request->all());
        return response()->json($Career,200);
    }
    public function delete(Career $Career){
        $this->authorize('delete', $Career);

        $Career->delete();
        return response()->json(null,204);
    }
}
