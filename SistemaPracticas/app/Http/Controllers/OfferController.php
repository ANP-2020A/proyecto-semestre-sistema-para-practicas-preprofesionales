<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfferCollection;
use App\Http\Resources\Offer as OfferResource;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function index(){
        return new OfferCollection(Offer::paginate());
    }
    public function show(Offer $Offer){
        return response()->json(new OfferResource($Offer),200);
    }

    public function store(Request $request){
        /* $messages = [
             'unique'=> 'Este :attribute ya existe',
             'required' => 'El campo :attribute es obligatorio.',
         ];
         $request->validate([
             'nombre' => 'required|string|unique:Offers|max:255',
             'descripcion' => 'required'
         ], $messages);*/

        //Solo funciona con validator, si se requiere hace la prueba
        //con validate comentar la linea 32 a la 37 y descomentar linea 21 a 28
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:Offers|max:255',
            'description' => 'required']);
        if($validator->fails()){
            return response()->json(['error'=>'data_validation_failed', "error_list"=>$validator->errors()], 422);
        }

        $Offer=Offer::create($request->all());
        return response()->json($Offer,201);
    }
    public function update(Request $request,Offer $Offer){
        $Offer->update($request->all());
        return response()->json($Offer,200);
    }
    public function delete(Offer $Offer){
        $Offer->delete();
        return response()->json(null,204);
    }
}
