<?php

namespace App\Http\Controllers;

use App\Postulation;
use App\Http\Resources\PostulationCollection;
use App\Http\Resources\Postulation as PostulationResource;
use Illuminate\Http\Request;

class PostulationController extends Controller
{
    public function index(){
        return new PostulationCollection(Postulation::paginate());
    }
    public function show(Postulation $postulation){
        return response()->json(new PostulationResource($postulation),200);
    }
    public function store(Request $request){
        $postulation=Postulation::create($request->all());
        return response()->json($postulation,201);
    }
    public function update(Request $request,Postulation $postulation){
        $postulation->update($request->all());
        return response()->json($postulation,200);
    }
    public function delete(Postulation $postulation){
        $postulation->delete();
        return response()->json(null,204);
    }
}
