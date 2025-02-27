<?php

use Illuminate\Support\Facades\Route;
use Lightit\Shared\App\Exceptions\InvalidActionException;
use src\Backoffice\Employee\App\Controllers\ListEmployeesController;
use src\Backoffice\Employee\App\Controllers\StoreEmployeesController;
use src\Backoffice\Task\App\Controllers\GetTaskController;
use src\Backoffice\Task\App\Controllers\ListTasksController;
use src\Backoffice\Task\App\Controllers\UpsertTaskController;

Route::get('/employees', [ListEmployeesController::class, 'index']);
Route::post('/employees', [StoreEmployeesController::class, 'store']);

Route::get('/tasks/{task}', GetTaskController::class);
Route::get('/tasks', ListTasksController::class);
Route::post('/tasks', UpsertTaskController::class); 
Route::put('/tasks/{task}', UpsertTaskController::class); 

Route::get('invalid', static fn() => throw new InvalidActionException("Is not valid"));

Route::get('{unknown}', static fn () => view('layouts.app  '))->where('unknown', '^(?!api).*$');

