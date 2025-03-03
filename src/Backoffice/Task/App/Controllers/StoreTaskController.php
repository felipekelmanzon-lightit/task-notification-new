<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Task\App\Requests\UpsertTaskRequest;
use src\Backoffice\Task\Domain\Actions\StoreTaskAction;
use src\Backoffice\Task\Domain\Models\Task;

class StoreTaskController extends Controller
{
    public function __invoke(UpsertTaskRequest $request, StoreTaskAction $action, Task|null $task = null): JsonResponse
    {
        $validatedData = $request->validated();
        $task = $action->execute($validatedData);

        return responder()
            ->success([
                'message' => 'Task created successfully',
                'data' => $task,
            ])
            ->respond();

    }
}
