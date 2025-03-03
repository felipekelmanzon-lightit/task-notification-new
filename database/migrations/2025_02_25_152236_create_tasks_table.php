<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lightit\Backoffice\Users\Domain\Models\User;
use src\Backoffice\Employee\Domain\Models\Employee;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(Employee::class, 'employee_id')->constrained()->onDelete('set null');
            $table->string('title');
            $table->string('description');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
