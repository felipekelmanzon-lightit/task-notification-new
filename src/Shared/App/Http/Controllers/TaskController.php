<?php

declare(strict_types=1);

namespace Lightit\Shared\App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController
{
    public function index()
    {
        return response()->json(['data' => Task::all()]);
    }
}
