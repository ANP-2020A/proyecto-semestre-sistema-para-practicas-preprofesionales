<?php

namespace App\Http\Controllers;

use App\Training;
use App\Http\Resources\TrainingCollection;
use App\Http\Resources\Training as TrainingResource;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(){
        $this->authorize('viewAny', Training::class);

        return new TrainingCollection(Training::paginate());
    }
    public function show(Training $Training){
        $this->authorize('view', $Training);

        return response()->json(new TrainingResource($Training),200);
    }
    public function store (Request $request){
        $this->authorize('create', Training::class);

        $Training= Training::create($request->all());
        return response()->json($Training,201);
    }
    public function update (Request $request, Training $Training){
        $this->authorize('update', $Training);

        $Training->update($request->all());
        return response()->json($Training,200);
    }
    public function delete (Training $Training)    {
        $this->authorize('delete', $Training);

        $Training ->delete();
        return response()->json(null,204);
    }
}
