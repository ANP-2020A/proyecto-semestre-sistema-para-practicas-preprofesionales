<?php

use App\Capacitacion;
use App\Carrera;
use App\Empresa;
use App\EstudiantePostulacion;
use App\Habilidad;
use App\Instruccion;
use App\Oferta;
use App\Pasante;
use App\TrayectoriaLaboral;
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


    //Capacitacion
    Route::get('capacitacions', 'CapacitacionController@index');
    Route::get('capacitacions/{capacitacion}','CapacitacionController@show');
    Route::post('capacitacions', 'CapacitacionController@store');
    Route::put('capacitacions/{capacitacion}', 'CapacitacionController@update');
    Route::delete('capacitacions/{capacitacion}','CapacitacionController@delete');
    //Carrera
    Route::get('carreras','CarreraController@index');
    Route::get('carreras/{carrera}', 'CarreraController@show');
    Route::post('carreras', 'CarreraController@store');
    Route::put('carreras/{carrera}', 'CarreraController@update');
    Route::delete('carreras/{carrera}','CarreraController@delete');

    //Empresa
    Route::get('empresas', 'EmpresaController@index');
    Route::get('empresas/{empresa}','EmpresaController@show');
    Route::post('empresas','EmpresaController@store');
    Route::put('empresas/{empresa}', 'EmpresaController@update');
    Route::delete('empresas/{empresa}', 'EmpresaController@delete');
    //EstudiantePostulacion
    Route::get('estudiante_postulacions','EstudiantePostulacionController@index');
    Route::get('estudiante_postulacions/{estudiante_postulacion}', 'EstudiantePostulacionController@show');
    Route::post('estudiante_postulacions', 'EstudiantePostulacionController@store');
    Route::put('estudiante_postulacions/{estudiante_postulacion}', 'EstudiantePostulacionController@update');
    Route::delete('estudiante_postulacions/{estudiante_postulacion}','EstudiantePostulacionController@delete');
    //Habilidad
    Route::get('habilidads','HabilidadController@idex');
    Route::get('habilidads/{habilidad}','HabilidadController@show');
    Route::post('habilidads','HabilidadController@store');
    Route::put('habilidads/{habilidad}','HabilidadController@update');
    Route::delete('habilidads/{habilidad}','HabilidadController@delete');
        //Instruccion
    Route::get('instruccions', 'InstruccionController@index');
    Route::get('instruccions/{instruccion}', 'InstruccionController@show');
    Route::post('instruccions', 'InstruccionController@store');
    Route::put('instruccions/{instruccion}', 'InstruccionController@update');
    Route::delete('instruccions/{instruccion}', 'InstruccionController@delete');
    //Oferta
    Route::get('ofertas', 'OfertaController@index');
    Route::get('ofertas/{oferta}', 'OfertaController@show');
    Route::post('ofertas','OfertaController@store');
    Route::put('ofertas/{oferta}','OfertaController@update');
    Route::delete('ofertas/{oferta}','OfertaController@delete');
        //Pasante
    Route::get('pasantes','PasanteController@index');
    Route::get('pasantes/{pasante}', 'PasanteController@show');
    Route::post('pasantes','PasanteController@store');
    Route::put('pasantes/{pasante}', 'PasanteController@update');
    Route::delete('pasantes/{pasante}','PasanteController@delete');
        //TrayectoriaLaboral
    Route::get('trayectoria_laborals','TrayectoriaLaboralController@index');
    Route::get('trayectoria_laborals/{trayectoria_laboral}', 'TrayectoriaLaboralController@show');
    Route::post('trayectoria_laborals', 'TrayectoriaLaboralController@store');
    Route::put('trayectoria_laborals/{trayectoria_laboral}','TrayectoriaLaboralController@update');
    Route::delete('trayectoria_laborals/{trayectoria_laboral}','TrayectoriaLaboralController@delete');



    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');

});
