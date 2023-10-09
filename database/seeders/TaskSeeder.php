<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Task 1',
            'description' => 'Descrição task 1',
            'due_date' => '2023/10/24 04:44:14',
            'category_id' => 1,
            'user_id' => 1,
        ]);
    }
}
