<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstructionCollection;
use App\Http\Resources\Instruction as InstructionResource;
use App\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function index(){
        return new InstructionCollection( Instruction::paginate());
    }
    public function show(Instruction $Instruction){
        return response()->json(new InstructionResource($Instruction),200);
    }
    public function store(Request $request){
        $Instruction= Instruction::create($request->all());
        return response()->json($Instruction,201);
    }
    public function update(Request $request, Instruction $Instruction){
        $Instruction->update($request->all());
        return response()->json($Instruction,200);
    }
    public function delete(Instruction $Instruction){
        $Instruction ->delete();
        return response()->json(null,204);
    }
}
