<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conteneur>
 */
class ConteneurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $adjectives = ['fast', 'cool', 'smart', 'silent', 'strong'];
        $nouns = ['tiger', 'eagle', 'panda', 'shark', 'falcon'];
        return [
            'conteneur_sous_category_id' => rand(1, 15),
            'label' => 'container_' . $adjectives[array_rand($adjectives)] . '_' . $nouns[array_rand($nouns)],
            'etat' => Arr::random(['occasion', 'neuf']),
            'prix' => number_format(mt_rand(1000, 10000) / 100, 2),
            'quick_description' => fake()->sentence(),
            'surface' => number_format(mt_rand(1000, 10000) / 100, 2),
            'capacity' => number_format(mt_rand(1000, 10000) / 100, 2),
            'nbr_palette' => rand(1, 100),
            'longueur_exterieur' => number_format(mt_rand(1000, 10000) / 100, 2),
            'largeur_exterieur' => number_format(mt_rand(1000, 10000) / 100, 2),
            'hauteur_exterieur' => number_format(mt_rand(1000, 10000) / 100, 2),
            'longueur_interieur' => number_format(mt_rand(1000, 10000) / 100, 2),
            'largeur_interieur' => number_format(mt_rand(1000, 10000) / 100, 2),
            'hauteur_interieur' => number_format(mt_rand(1000, 10000) / 100, 2),
            'largeur_porte' => number_format(mt_rand(1000, 10000) / 100, 2),
            'hauteur_porte' => number_format(mt_rand(1000, 10000) / 100, 2),
            'passage_de_fourche' => rand(1, 10),

        ];
    }
}
