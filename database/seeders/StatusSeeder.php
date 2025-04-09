<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'statusName' => 'pendente',
        ]);
        Status::create([
            'statusName' => 'Em andamento',
        ]);
        Status::create([
            'statusName' => 'Finalizada',
        ]);
    }
}
