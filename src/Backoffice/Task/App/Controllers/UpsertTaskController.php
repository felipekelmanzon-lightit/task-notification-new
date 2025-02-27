<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Task\App\Requests\TaskRequest;
use src\Backoffice\Task\Domain\Models\Task;

class UpsertTaskController extends Controller
{
    public function __invoke(TaskRequest $request, Task|null $task = null): JsonResponse
    {
        $validatedData = $request->validated();

        if ($task) {
            $task->update($validatedData);

            return response()->json(['message' => 'Task updated successfully', 'data' => $task]);
        } else {
            $task = Task::create($validatedData);

            return response()->json(['message' => 'Task created successfully', 'data' => $task]);
        }
    }
}
