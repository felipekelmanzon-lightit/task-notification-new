<?php

declare(strict_types=1);

namespace src\Backoffice\Task\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'employee_id' => ['required', 'exists:employees,id'],
        ];
    }
}
