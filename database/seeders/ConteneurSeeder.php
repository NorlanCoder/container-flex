<?php

namespace Database\Seeders;

use App\Models\Conteneur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConteneurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conteneur::factory()->count(30)->create();
    }
}
