<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'Escuela']);
        Tag::create(['name' => 'Personal']);
        Tag::create(['name' => 'Trabajo']);
        Tag::create(['name' => 'Familia']);
        Tag::create(['name' => 'General']);
        Tag::create(['name' => 'Desconocido']);
    }
}
