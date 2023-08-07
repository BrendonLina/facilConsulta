<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;

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

Route::get('/', function(){
    return "Seja Bem vindo Leia o README para entender o funcionamento da API";
});

Route::get('/cidades', [CidadeController::class, 'index']);
Route::post('/cidades', [CidadeController::class, 'store']);

Route::get('/medicos', [MedicoController::class, 'index']);
Route::post('/medicos', [MedicoController::class, 'store']);

Route::get('/pacientes', [PacienteController::class, 'index']);
Route::post('/pacientes', [PacienteController::class, 'store']);

Route::get('/cidades/{id}/medicos', [CidadeController::class, 'cidadesMedicos']);


Route::post('/medicos/{id}/pacientes', [MedicoController::class, 'PacientesMedicoStore']);
Route::get('/medicos/{medico_id}/pacientes', [MedicoController::class, 'ListarPacientesMedico']);

Route::put('/paciente/{id}', [PacienteController::class, 'update']);
