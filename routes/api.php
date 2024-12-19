<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ControllerLogin;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Teste dessa forma no browser http://localhost:8000/api/students

//Nesse caso o usuário só pode acessar a pag '/user' se tiver o token(auth:sanctum) gravado em seu navegador
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [ControllerLogin::class, 'login']);

Route::get('students-get', [ApiController::class, 'getAllStudents']);
Route::get('students/{id}', [ApiController::class,'getStudent']);
Route::post('students-created', [ApiController::class, 'createStudent']);
Route::put('students-update/{id}', [ApiController::class,'updateStudent']);
Route::delete('students-delete/{id}',[ApiController::class,'deleteStudent']);


