<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Task\App\Requests\UpsertTaskRequest;
use src\Backoffice\Task\Domain\Actions\UpdateTaskAction;
use src\Backoffice\Task\Domain\Models\Task;

class UpdateTaskController extends Controller
{
    public function __invoke(UpsertTaskRequest $request, UpdateTaskAction $action, Task|null $task = null): JsonResponse
    {
        $validatedData = $request->validated();
        $task = $action->execute($validatedData, $task);

        return responder()
            ->success([
                'message' => 'Task updated successfully',
                'data' => $task,
            ])
            ->respond();
    }
}
