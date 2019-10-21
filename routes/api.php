<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/restaurants/list' , [RestaurantController::class , 'index'] );
Route::get('/restaurants/{restaurants}/menu' , [RestaurantController::class , 'menu'] );
Route::get('/menu/{menu}/view' , [MenuController::class , 'view'] );
