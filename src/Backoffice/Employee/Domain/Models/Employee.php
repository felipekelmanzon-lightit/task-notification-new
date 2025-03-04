<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use src\Backoffice\Task\Domain\Models\Task;

class Employee extends Model
{
    use Notifiable;

    protected $guarded = ['id'];

    /**
     * @return HasMany<Task, $this>
     */
    public function task(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
