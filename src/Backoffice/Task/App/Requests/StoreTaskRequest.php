<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'status' => ['required', 'string', 'in:pending,in_progress,completed'],
            'employee_id' => ['required', 'exists:employees,id'],
        ];
    }
}
