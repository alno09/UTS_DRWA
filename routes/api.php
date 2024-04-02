<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\No4Controller;
use App\Http\Controllers\No5Controller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// no 4
Route::get('/guru/index', [No4Controller::class, 'getDataGuru']);
Route::post('/guru/tambah-data', [No4Controller::class, 'postDataGuru']);
Route::get('/guru/index/{id}', [No4Controller::class, 'getDataGuruById']);
Route::put('/mapel/edit/{id}', [No4Controller::class, 'putDataGuru']);
Route::delete('/mapel/hapus/{id}', [No4Controller::class, 'deleteDataGuru']);

// no 5
Route::get('/userpost', [No5Controller::class, 'getUserPost']);
Route::get('/student', [No5Controller::class, 'getStudent']);
