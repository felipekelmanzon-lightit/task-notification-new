<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Actions;

use Illuminate\Database\Eloquent\Collection;
use src\Backoffice\Task\Domain\Models\Task;

class ListTasksAction
{
    /**
     * @return Collection<int, Task>
     */
    public function execute(): Collection
    {
        return Task::all();
    }
}
