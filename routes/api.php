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

Route::prefix('projects')->group(function (){
    Route::get('', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

    Route::get('/{project}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

    Route::post('', [\App\Http\Controllers\ProjectController::class, 'store'])->name('project.create');

    Route::put('/{project}', [\App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');

    Route::delete('/{project}', [\App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');
});

Route::prefix('users')->group(function (){
    Route::get('', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');

    Route::post('', [\App\Http\Controllers\UserController::class, 'store'])->name('users.create');

    Route::put('/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');

    Route::delete('/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
});



