<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelTaskTable extends Migration
{
    public function up(): void
    {
        Schema::create('label_task', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained('tasks');
            $table->foreignId('label_id')->constrained('labels');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('label_task');
    }
}
