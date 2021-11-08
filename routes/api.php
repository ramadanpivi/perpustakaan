<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('buku/{id}', function($id){
    return \App\Models\Buku::find($id);
});
Route::get('buku', function(){
    return \App\Models\Buku::all();
});
Route::post('buku', function(Request $request){
    return \App\Models\Buku::create($request->all());
});

