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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(
    [
        'prefix' => 'v1',
        'namespace' => 'App\Http\Controllers\API\V1'
    ],

    function() {
        Route::apiResource('calendaries', 'CalendarController')
            ->names('api.calendaries');

        Route::apiResource('reservations', 'ReservationController')
            ->names('api.reservations');

        Route::apiResource('services', 'ServiceController')
            ->names('api.services');

        Route::apiResource('routes', 'RouteController')
            ->names('api.routes');

        Route::apiResource('plans', 'PlanController')
            ->names('api.plans');

        Route::apiResource('users', 'UserController')
            ->names('api.users');
    }
);
