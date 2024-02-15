<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students-get', [ApiController::class, 'getAllStudents']);
Route::get('students/{id}', [ApiController::class,'getStudent']);
Route::post('students-created', [ApiController::class, 'createStudent']);
Route::put('students-update/{id}', [ApiController::class,'updateStudent']);
Route::delete('students-delete/{id}',[ApiController::class,'deleteStudent']);


