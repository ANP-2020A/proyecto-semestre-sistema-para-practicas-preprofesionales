<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Http\Resources\SkillCollection;
use App\Http\Resources\Skill as SkillResource;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $this->authorize('viewAny', Skill::class);
        return new SkillCollection(Skill::paginate());
    }

    public function show(Skill $Skill){
        $this->authorize('view', $Skill);
        return response()->json(new SkillResource($Skill),200);
    }

    public function store(Request $request){
        $this->authorize('create', Skill::class);

        $Skill= Skill::create($request->all());
        return response()->json($Skill,201);
    }
    public function update(Request $request,Skill $Skill){
        $this->authorize('update', $Skill);

        $Skill->update($request->all());
        return response()->json($Skill,200);
    }
    public function delete(Skill $Skill){
        $Skill->delete();
        return response()->json(null,204);
    }
}
