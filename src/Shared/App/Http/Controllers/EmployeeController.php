<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Lightit\Shared\App\Http\Requests\EmployeeRequest;
use Lightit\Shared\App\src\Backoffice\Task\Domain\Models\Employee;

class EmployeeController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['data' => Employee::all()]);
    }

    public function store(EmployeeRequest $request): JsonResponse
    {
        $employee = Employee::create($request->validated());

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee]);
    }
}
