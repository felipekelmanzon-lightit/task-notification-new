<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use Illuminate\Http\JsonResponse;
use src\Backoffice\Task\Domain\Models\Task;

class GetTaskAction
{
    public function execute(Task $task): JsonResponse
    {
        return response()->json(['data' => $task]);
    }
}
