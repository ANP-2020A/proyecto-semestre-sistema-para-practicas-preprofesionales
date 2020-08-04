<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Http\Resources\SkillCollection;
use App\Http\Resources\Skill as SkillResource;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return new SkillCollection(Skill::paginate());
    }
    public function show(Skill $Skill){
        return response()->json(new SkillResource($Skill),200);
    }
    public function store(Request $request){
        $Skill= Skill::create($request->all());
        return response()->json($Skill,201);
    }
    public function update(Request $request,Skill $Skill){
        $Skill->update($request->all());
        return response()->json($Skill,200);
    }
    public function delete(Skill $Skill){
        $Skill->delete();
        return response()->json(null,204);
    }
}
