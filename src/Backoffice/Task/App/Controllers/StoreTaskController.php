<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Task\App\Requests\StoreTaskRequest;
use src\Backoffice\Task\Domain\Actions\StoreTaskAction;

class StoreTaskController extends Controller
{
    public function __invoke(StoreTaskRequest $request, StoreTaskAction $action): JsonResponse
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
