<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', \App\Http\Controllers\Api\V1\TaskController::class);
    Route::patch('/tasks/{task}/complete', \App\Http\Controllers\Api\V1\CompleteTaskController::class);
});
