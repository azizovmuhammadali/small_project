<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TicketController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('users/register',[UserController::class,'register']);
Route::post('clients/register',[ClientController::class,'register']);
Route::post('tickets/create',[TicketController::class,'create']);
Route::patch('tickets/{id}/status',[TicketController::class,'statusUpdate']);