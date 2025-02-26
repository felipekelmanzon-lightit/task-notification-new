<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Lightit\Shared\App\src\Backoffice\Task\Domain\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Employee::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:employees,email'],
        ]);
        
        $employee = Employee::create($request->all());

        return response()->json(['message' => 'Employee created successfully', 'data' => $employee]);
    }
}
