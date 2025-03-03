<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Task\Domain\Models\Task;

class StoreTaskAction
{
    /**
     * @param array<string, mixed> $data
     */
    public function execute(array $data): Task
    {
        return Task::create($data);
    }
}
