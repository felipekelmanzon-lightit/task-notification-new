<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\Domain\Actions;

use Illuminate\Http\JsonResponse;
use src\Backoffice\Employee\Domain\Models\Employee;

class ListEmployeesAction
{
    public function execute(): JsonResponse
    {
        return response()->json(['data' => Employee::all()]);
    }
}
