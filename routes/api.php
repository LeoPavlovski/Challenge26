<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\MatchController;
use App\Http\Controllers\Api\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
Route::get('/listMatches',[MatchController::class, 'index']);
Route::post('/createTeam',[TeamController::class , 'store']);
Route::put('/updateTeam/{team}',[TeamController::class, 'update']);
Route::delete('/deleteTeam/{delete}',[TeamController::class ,'destroy']);
Route::post('/createMatch', [MatchController::class, 'store']);
Route::put('/updateMatch/{game}',[MatchController::class, 'update']);
Route::delete('/deleteMatch/{game}',[MatchController::class,'destroy']);
Route::get('/getMatches',[MatchController::class, "index"]);
Route::get('/getMatch/{game}',[MatchController::class, 'show']);
});

Route::post('/auth/register', [AuthenticationController::class, 'registerUser']);
Route::post('/auth/login',[AuthenticationController::class, 'loginUser']);
