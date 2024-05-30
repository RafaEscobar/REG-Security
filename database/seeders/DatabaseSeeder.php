<?php

namespace Database\Seeders;

use App\Models\Entry;
use App\Models\Section;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Section::factory(10)->create();
        // Entry::factory(10)->create();

        $this->call([
            TagSeed::class
        ]);
    }
}
