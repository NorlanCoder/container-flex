<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SousCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'label' => "20' container",
                'category_id' => 1
            ],
            [
                'label' => "40' container",
                'category_id' => 1
            ],
            [
                'label' => "Occasions",
                'category_id' => 1
            ],
            [
                'label' => "Petit",
                'category_id' => 1
            ],
            [
                'label' => "Standard",
                'category_id' => 1
            ],
            [
                'label' => "Specifique",
                'category_id' => 1
            ],
            [
                'label' => "Specifique",
                'category_id' => 1
            ],
            [
                'label' => "Réfrigérant",
                'category_id' => 2
            ],
            [
                'label' => "Isotherme",
                'category_id' => 2
            ],
            [
                'label' => "Chambre froide",
                'category_id' => 2
            ],
            [
                'label' => "Bureau",
                'category_id' => 3
            ],
            [
                'label' => "Sanitaire",
                'category_id' => 3
            ],
            [
                'label' => "Bungalow",
                'category_id' => 3
            ],
            [
                'label' => "Restauration",
                'category_id' => 3
            ],
            [
                'label' => "Piscine",
                'category_id' => 3
            ],

        ];
        DB::table('sous_categories')->insert($data);
    }
}
