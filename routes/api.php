<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Routing\RouteDefinition;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/test', function (Request $request) {
//     return "Shaahin";
// })->middleware('auth:api');

// Route::apiResource('tasks', 'TasksController');
RouteDefinition::register('Route');