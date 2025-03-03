<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Task\Domain\Models\Task;

class UpdateTaskAction 
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(array $data, Task|null $task = null): Task
    {
        if ($task === null) {
            throw new \InvalidArgumentException('Task can not be null');
        }
        $task->update($data);
        return $task;
    }
}
