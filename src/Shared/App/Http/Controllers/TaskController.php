<?php

declare(strict_types=1);

namespace Lightit\Shared\App\Http\Controllers;

use Composer\DependencyResolver\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Js;
use Lightit\Shared\App\src\Backoffice\Employee\Domain\Models\Task;

class TaskController
{
    public function index(): JsonResponse
    {
        return response()->json(['data' => Task::all()]);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'employee_id' => ['required', 'exists:employees,id'],
        ]);
        
        $task = Task::create($validatedData);

        return response()->json(['message' => 'Task created successfully', 'data' => $task]);
    }
}
