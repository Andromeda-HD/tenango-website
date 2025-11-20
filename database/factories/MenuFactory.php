<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->words(2, true),
            'kategori' => 'kopi',
            'harga' => $this->faker->numberBetween(20000, 60000),
            'deskripsi' => $this->faker->sentence(),
            'gambar' => 'images/uploads/default.jpg'
        ];
    }
}
