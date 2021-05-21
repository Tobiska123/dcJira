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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

Route::get('projects/{project}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

Route::post('projects', [\App\Http\Controllers\ProjectController::class, 'store'])->name('project.create');

Route::put('projects/{project}', [\App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');

Route::delete('projects/{project}', [\App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');



