<?php

use App\Training;
use App\Career;
use App\Business;
use App\EstudiantePostulacion;
use App\Skill;
use App\Instruction;
use App\Offer;
use App\Intern;
use App\Job;
use App\User;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');


    //Training
    Route::get('trainings', 'TrainingController@index');
    Route::get('trainings/{training}','TrainingController@show');
    Route::post('trainings', 'TrainingController@store');
    Route::put('trainings/{training}', 'TrainingController@update');
    Route::delete('trainings/{training}','TrainingController@delete');
    //Career
    Route::get('careers','CareerController@index');
    Route::get('careers/{career}', 'CareerController@show');
    Route::post('careers', 'CareerController@store');
    Route::put('careers/{career}', 'CareerController@update');
    Route::delete('careers/{career}','CareerController@delete');

    //Business
    Route::get('businesses', 'BusinessController@index');
    Route::get('businesses/{business}','BusinessController@show');
    Route::post('businesses','BusinessController@store');
    Route::put('businesses/{business}', 'BusinessController@update');
    Route::delete('businesses/{business}', 'BusinessController@delete');
    //Postulation
    Route::get('postulations','Postulation@index');
    Route::get('postulations/{postulation}', 'Postulation@show');
    Route::post('postulations', 'Postulation@store');
    Route::put('postulations/{postulation}', 'Postulation@update');
    Route::delete('postulations/{postulation}','Postulation@delete');
    //Skill
    Route::get('skills','SkillController@idex');
    Route::get('skills/{skill}','SkillController@show');
    Route::post('skills','SkillController@store');
    Route::put('skills/{skill}','SkillController@update');
    Route::delete('skills/{skill}','SkillController@delete');
        //Instruction
    Route::get('instructions', 'InstructionController@index');
    Route::get('instructions/{instruction}', 'InstructionController@show');
    Route::post('instructions', 'InstructionController@store');
    Route::put('instructions/{instruction}', 'InstructionController@update');
    Route::delete('instructions/{instruction}', 'InstructionController@delete');
    //Offer
    Route::get('offers', 'OfferController@index');
    Route::get('offers/{offer}', 'OfferController@show');
    Route::post('offers','OfferController@store');
    Route::put('offers/{offer}','OfferController@update');
    Route::delete('offers/{offer}','OfferController@delete');
        //Intern
    Route::get('interns','InternController@index');
    Route::get('interns/{intern}', 'InternController@show');
    Route::post('interns','InternController@store');
    Route::put('interns/{intern}', 'InternController@update');
    Route::delete('interns/{intern}','InternController@delete');
        //Job
    Route::get('jobs','JobController@index');
    Route::get('jobs/{job}', 'JobController@show');
    Route::post('jobs', 'JobController@store');
    Route::put('jobs/{job}','JobController@update');
    Route::delete('jobs/{job}','JobController@delete');



    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');

});
