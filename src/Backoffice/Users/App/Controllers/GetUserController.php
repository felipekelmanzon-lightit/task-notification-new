<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Users\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Backoffice\Users\App\Transformers\UserTransformer;
use src\Backoffice\Users\Domain\Models\User;

class GetUserController
{
    public function __invoke(User $user): JsonResponse
    {
        return responder()
            ->success($user, UserTransformer::class)
            ->respond();
    }
}
