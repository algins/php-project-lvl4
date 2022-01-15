<?php

namespace Database\Factories;

use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'status_id' => TaskStatus::factory(),
            'created_by_id' => Auth::id(),
            'assigned_to_id' => User::factory(),
        ];
    }
}
