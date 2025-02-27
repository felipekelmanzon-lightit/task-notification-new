<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use src\Backoffice\Employee\App\Requests\EmployeeRequest;
use src\Backoffice\Employee\Domain\Models\Employee;

class StoreEmployeesController extends Controller
{
    public function __invoke(EmployeeRequest $request): JsonResponse
    {
        $employee = Employee::create($request->validated());

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee]);
    }
}
