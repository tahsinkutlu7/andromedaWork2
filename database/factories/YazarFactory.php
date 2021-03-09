<?php

namespace Database\Factories;

use App\Models\Yazar;
use Illuminate\Database\Eloquent\Factories\Factory;

class YazarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Yazar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'yazarAdi'=>$this->faker->name,
        ];
    }
}
