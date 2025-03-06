<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Users\Domain\Actions;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;
use src\Backoffice\Users\Domain\Models\User;

class ListUserAction
{
    /**
     * @return Collection<int, Model>
     */
    public function execute(): Collection
    {
        return QueryBuilder::for(User::class)
            ->allowedFilters(['email'])
            ->allowedSorts('email')
            ->get();
    }
}
