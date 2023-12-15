<?php

namespace Database\Seeders;
use App\Models\Manhwa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManhwaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manhwa::factory(50)->create();
    }
}
