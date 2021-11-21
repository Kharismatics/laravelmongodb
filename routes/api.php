<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
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
Route::resource('package', PackageController::class);
// Route::get('/package', [PackageController::class, 'index']);
// Route::post('/package', [PackageController::class, 'store']);
// Route::get('package/{package}', [PackageController::class, 'show']);
// Route::put('package/{package}', [PackageController::class, 'update']);
// Route::patch('package_patch/{package}', [PackageController::class, 'update']);