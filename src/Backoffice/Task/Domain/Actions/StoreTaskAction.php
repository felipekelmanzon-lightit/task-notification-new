<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Task\Domain\Models\Task;
use src\Backoffice\Employee\Domain\Models\Employee;
use src\Backoffice\Employee\App\Notifications\TaskAssignmentNotification;

class StoreTaskAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(array $data): Task
    {
        $task = Task::create($data);

        $employee = Employee::find($data['employee_id']);
        if ($employee instanceof Employee) {
            $employee->notify(new TaskAssignmentNotification($task));
        }

        return $task;
    }
}