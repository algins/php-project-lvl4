<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('task_statuses')->insert([
            [
                'name' => 'новый',
                'created_at' => now(),
            ],
            [
                'name' => 'в работе',
                'created_at' => now(),
            ],
            [
                'name' => 'на тестировании',
                'created_at' => now(),
            ],
            [
                'name' => 'завершен',
                'created_at' => now(),
            ],
        ]);
    }
}
