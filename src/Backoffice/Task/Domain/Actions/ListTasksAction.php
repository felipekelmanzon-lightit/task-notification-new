<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use Illuminate\Http\JsonResponse;
use src\Backoffice\Task\Domain\Models\Task;

class ListTasksAction
{
    public function execute(): JsonResponse
    {
        return response()->json(['data' => Task::all()]);
    }
}
