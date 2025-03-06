<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Employee\App\Notifications\TaskAssignmentNotification;
use src\Backoffice\Task\Domain\Models\Task;

class UpdateTaskAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(array $data, Task $task): Task
    {
        $task->update($data);

        $employee = $task->employee;
        $employee->notify(new TaskAssignmentNotification($task, true));

        return $task;
    }
}
