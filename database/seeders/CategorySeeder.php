<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'label' => 'Maritime',
                'description' => 'Conteneur Maritime'
            ],
            [
                'label' => 'Froid',
                'description' => 'Conteneur Froid'
            ],
            [
                'label' => 'Meublé',
                'description' => 'Conteneur Meublé'
            ],

        ];

        DB::table('categories')->insert($data);
    }
}
