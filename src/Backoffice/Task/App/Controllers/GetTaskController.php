<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use src\Backoffice\Task\Domain\Models\Task;

class GetTaskController
{
    public function __invoke(Task $task): JsonResponse
    {
        return responder()
            ->success([
                'message' => 'Task retrieved successfully',
                'data' => $task,
            ])
            ->respond();
    }
}
