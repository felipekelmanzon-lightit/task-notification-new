<?php

use Illuminate\Support\Facades\Route;
use Lightit\Shared\App\Exceptions\InvalidActionException;
use src\Backoffice\Employee\App\Controllers\ListEmployeesController;
use src\Backoffice\Employee\App\Controllers\StoreEmployeeController;
use src\Backoffice\Task\App\Controllers\GetTaskController;
use src\Backoffice\Task\App\Controllers\ListTasksController;
use src\Backoffice\Task\App\Controllers\UpsertTaskController;

Route::prefix('employees')
    ->group(static function () {
        Route::get('/', ListEmployeesController::class);
        Route::post('/', StoreEmployeeController::class);
    });

Route::prefix('tasks')
    ->group(static function () {
        Route::get('/{task}', GetTaskController::class);
        Route::get('/', ListTasksController::class);
        Route::post('/', UpsertTaskController::class);
        Route::put('/{task}', UpsertTaskController::class);
    });


Route::get('invalid', static fn() => throw new InvalidActionException("Is not valid"));

Route::get('{unknown}', static fn () => view('layouts.app  '))->where('unknown', '^(?!api).*$');

