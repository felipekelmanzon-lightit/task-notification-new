<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Task\Domain\Models\Task;
use src\Backoffice\Employee\App\Notifications\TaskAssignmentNotification;

class UpdateTaskAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(array $data, Task $task): Task
    {
        $task->update($data);

        $employee = $task->employee;
        if ($employee !== null) {
            $employee->notify(new TaskAssignmentNotification($task, true));
        }

        return $task;
    }
}
