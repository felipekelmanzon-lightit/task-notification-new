<?php

declare(strict_types=1);

namespace Lightit\Shared\App\src\Backoffice\Employee\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Lightit\Shared\App\src\Backoffice\Task\Domain\Models\Employee;

class Task extends Model
{
    /**
     * @return BelongsTo<Employee, $this>
     */
    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
