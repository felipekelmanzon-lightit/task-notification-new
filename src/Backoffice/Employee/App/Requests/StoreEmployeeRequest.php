<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:employees,email'],
        ];
    }
}
