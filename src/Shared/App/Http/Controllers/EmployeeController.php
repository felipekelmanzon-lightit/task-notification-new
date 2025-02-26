<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Lightit\Shared\App\src\Backoffice\Task\Domain\Models\Employee;

class EmployeeController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['data' => Employee::all()]);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:employees,email'],
        ]);

        $employee = Employee::create($validatedData);

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee]);
    }
}
