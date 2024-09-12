<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('assignee_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['open', 'in progress', 'closed']);
            $table->enum('type', ['bug', 'feature', 'task']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
