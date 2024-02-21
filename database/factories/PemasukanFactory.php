<?php

namespace Database\Factories;

use App\Pemasukan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PemasukanFactory extends Factory
{
    protected $model = Pemasukan::class;

    public function definition()
    {
        return [
            'tanggal' => $this->faker->date(),
            'jumlah' => $this->faker->randomFloat(2, 10000, 1000000),
        ];
    }
}