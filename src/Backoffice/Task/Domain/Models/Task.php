<?php

declare(strict_types=1);

namespace src\Backoffice\Task\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use src\Backoffice\Employee\Domain\Models\Employee;

class Task extends Model
{
    protected $guarded = [];

    /**
     * @return BelongsTo<Employee, $this>
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
