<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use src\Backoffice\Task\Domain\Models\Task;


class ListTasksAction
{
    public function execute()
    {
        return Task::all();
    }
}
