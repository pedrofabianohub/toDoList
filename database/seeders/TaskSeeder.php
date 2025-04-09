<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            "title"=> "Task 1",
            "description"=> "test",
            "dueDate"=> "2022-12-12 00:00:00",
            "status_id"=> Status::all()->random()->id,
            "user_id"=> User::all()->random()->id,
        ]);
    }
}
