<?php

declare(strict_types=1);

namespace Lightit\Shared\App\Http\Controllers;

use Lightit\Shared\App\src\Backoffice\Employee\Domain\Models\Task;

class TaskController
{
    public function index()
    {
        return response()->json(['data' => Task::all()]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'employee_id' => ['required', 'exists:employees,id'],
        ]);
        
        $task = Task::create(request()->all());

        return response()->json(['message' => 'Task created successfully', 'data' => $task]);
    }
}
