<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\Domain\Actions;

use src\Backoffice\Employee\Domain\Models\Employee;

class StoreEmployeeAction
{
    /**
     * @param array<string, mixed> $data
     */

    public function execute(array $data): Employee
    {
        return Employee::create($data);
    }
}
