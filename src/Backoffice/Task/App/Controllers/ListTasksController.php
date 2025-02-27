<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Task\Domain\Actions\ListTasksAction;

class ListTasksController extends Controller
{
    public function __invoke(ListTasksAction $action): JsonResponse
    {
        return $action->execute();
    }
}
