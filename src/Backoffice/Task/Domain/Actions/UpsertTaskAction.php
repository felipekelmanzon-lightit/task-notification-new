<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Task\Domain\Models\Task;

class UpsertTaskAction
{
    public function execute(array $data, ?Task $task = null): Task
    {
        return $task ? tap($task)->update($data) : Task::create($data);
    }
}
