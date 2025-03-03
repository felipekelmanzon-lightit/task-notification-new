<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Employee\App\Requests\StoreEmployeeRequest;
use src\Backoffice\Employee\Domain\Actions\StoreEmployeeAction;

class StoreEmployeeController extends Controller
{
    public function __invoke(StoreEmployeeRequest $request, StoreEmployeeAction $action): JsonResponse
    {
        $employee = $action->execute($request->validated());

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee]);
    }
}
