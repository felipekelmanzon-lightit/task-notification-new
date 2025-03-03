<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\App\Controllers;

use Illuminate\Http\JsonResponse;
use src\Backoffice\Employee\Domain\Actions\ListEmployeesAction;

class ListEmployeesController
{
    public function __invoke(ListEmployeesAction $action): JsonResponse
    {
        return responder()
            ->success([
                'message' => 'Employees listed successfully',
                'data' => $action->execute(),
            ])
            ->respond();
    }
}
