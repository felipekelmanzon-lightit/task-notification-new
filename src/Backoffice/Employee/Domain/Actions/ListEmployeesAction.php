<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\Domain\Actions;

use src\Backoffice\Employee\Domain\Models\Employee;
use Illuminate\Database\Eloquent\Collection;

class ListEmployeesAction
{
    public function execute(): Collection
    {
        return Employee::all();
    }
}
