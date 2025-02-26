<?php

use Illuminate\Support\Facades\Route;
use Lightit\Shared\App\Exceptions\InvalidActionException;
use Lightit\Shared\App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees', [EmployeeController::class, 'store']);

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);

Route::get('invalid', static fn() => throw new InvalidActionException("Is not valid"));

Route::get('{unknown}', static fn () => view('layouts.app  '))->where('unknown', '^(?!api).*$');

