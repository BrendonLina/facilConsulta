<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AuthController;

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

    
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

Route::get('/', function(){
    return response()->json(['title' => 'Seja Bem vindo Leia o README para entender o funcionamento da API','api_version' => '1.0.0']);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/cidades', [CidadeController::class, 'index']);
Route::post('/cidades', [CidadeController::class, 'store']);
Route::get('/cidades/{id}/medicos', [CidadeController::class, 'cidadesMedicos']);

Route::get('/medicos', [MedicoController::class, 'index']);
Route::middleware('auth:api')->post('/medicos', [MedicoController::class, 'store']);
Route::post('/medicos/{id}/pacientes', [MedicoController::class, 'PacientesMedicoStore']);
Route::get('/medicos/{medico_id}/pacientes', [MedicoController::class, 'ListarPacientesMedico']);

Route::middleware('auth:api')->get('/pacientes', [PacienteController::class, 'index']);
Route::middleware('auth:api')->post('/pacientes', [PacienteController::class, 'store']);
Route::middleware('auth:api')->put('/paciente/{id}', [PacienteController::class, 'update']);
