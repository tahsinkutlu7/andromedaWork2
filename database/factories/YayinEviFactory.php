<?php

namespace Database\Factories;

use App\Models\YayinEvi;
use Illuminate\Database\Eloquent\Factories\Factory;

class YayinEviFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = YayinEvi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'yayinEviAdi'=>$this->faker->company,
        ];
    }
}
