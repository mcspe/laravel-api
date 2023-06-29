<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;


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

Route::namespace('Api')
      ->prefix('projects')
      ->group(function() {
        Route::get('/', [ProjectController::class, 'index']);
        Route::get('/detail/{slug}', [ProjectController::class, 'getProjectDetail']);
        Route::get('/types', [ProjectController::class, 'getTypes']);
        Route::get('/technologies', [ProjectController::class, 'getTechnologies']);
        Route::get('/image', [ProjectController::class, 'getImage']);
      });
