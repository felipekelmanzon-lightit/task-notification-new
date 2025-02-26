<?php

declare(strict_types=1);

namespace Lightit\Shared\App\src\Backoffice\Task\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Lightit\Shared\App\src\Backoffice\Employee\Domain\Models\Task;

class Employee extends Model
{
    /**
     * @return HasMany<Task, $this>
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
