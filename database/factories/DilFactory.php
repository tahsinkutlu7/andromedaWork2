<?php

namespace Database\Factories;

use App\Models\Dil;
use Illuminate\Database\Eloquent\Factories\Factory;

class DilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dilAdi'=>$this->faker->country,
        ];
    }
}
