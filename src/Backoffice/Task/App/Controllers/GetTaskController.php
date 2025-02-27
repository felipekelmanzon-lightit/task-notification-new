<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use src\Backoffice\Task\Domain\Actions\GetTaskAction;
use src\Backoffice\Task\Domain\Models\Task;

class GetTaskController
{
    public function __invoke(GetTaskAction $action, Task $task): JsonResponse
    {
        return $action->execute($task);
    }
}
