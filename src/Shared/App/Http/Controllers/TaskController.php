<?php

declare(strict_types=1);

namespace Lightit\Shared\App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Shared\App\Http\Requests\TaskRequest;
use Lightit\Shared\App\src\Backoffice\Employee\Domain\Models\Task;

class TaskController
{
    public function index(): JsonResponse
    {
        return response()->json(['data' => Task::all()]);
    }

    public function store(TaskRequest $request): JsonResponse
    {
        $task = Task::create($request->validated());

        return response()->json(['message' => 'Task created successfully', 'data' => $task]);
    }
}
