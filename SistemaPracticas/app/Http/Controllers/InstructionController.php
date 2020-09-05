<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstructionCollection;
use App\Http\Resources\Instruction as InstructionResource;
use App\Instruction;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function index(){
        $this->authorize('viewAny', Instruction::class);

        return new InstructionCollection( Instruction::paginate());
    }
    public function show(Instruction $Instruction){
        $this->authorize('view', $Instruction);

        return response()->json(new InstructionResource($Instruction),200);
    }
    public function store(Request $request){
        $this->authorize('create', Instruction::class);

        $Instruction= Instruction::create($request->all());
        return response()->json($Instruction,201);
    }
    public function update(Request $request, Instruction $Instruction){
        $this->authorize('update', $Instruction);

        $Instruction->update($request->all());
        return response()->json($Instruction,200);
    }
    public function delete(Instruction $Instruction){
        $this->authorize('delete', $Instruction);

        $Instruction ->delete();
        return response()->json(null,204);
    }
}
