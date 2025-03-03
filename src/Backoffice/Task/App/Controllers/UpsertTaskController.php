<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Task\App\Requests\UpsertTaskRequest;
use src\Backoffice\Task\Domain\Actions\UpsertTaskAction;
use src\Backoffice\Task\Domain\Models\Task;

class UpsertTaskController extends Controller
{
    public function __invoke(UpsertTaskRequest $request, UpsertTaskAction $action, Task|null $task = null): JsonResponse
    {
        $validatedData = $request->validated();
        $task = $action->execute($validatedData, $task);

        return response()->json([
            'message' => $request->isMethod('put') ? 'Task updated successfully' : 'Task created successfully',
            'data' => $task,
        ]);
    }
}
