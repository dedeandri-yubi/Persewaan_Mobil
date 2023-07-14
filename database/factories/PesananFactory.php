<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PesananFactory extends Factory
{
    public function definition(): array
    {
        return [
            'no_pesanan' => $this->faker->randomElement(["NP001","NP002","NP003","NP004","NP005","NP006","NP007","NP008","NP009","NP010"]),
            'tanggal_pesanan' => $this->faker->date(),
            'nama_supplier' => $this->faker->name,
            'nama_product' => $this->faker->name,
            'total' => $this->faker->randomElement(["100","200","300","400","500","600","700","800","900","1000"])
        ];
    }
}
