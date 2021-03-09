<?php

namespace Database\Factories;

use App\Models\Kitap;
use Illuminate\Database\Eloquent\Factories\Factory;

class KitapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kitap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kitapAdi'=>$this->faker->catchPhrase,
            'kitapAciklamasi'=>$this->faker->realText(rand(100,200)),
            'kitapKapagi'=>'https://media.wired.com/photos/5be4cd03db23f3775e466767/125:94/w_2375,h_1786,c_limit/books-521812297.jpg',
            'ISBN'=>$this->faker->isbn10,
            'sayfaSayisi'=>rand(95,1000),
            'kategoriId'=>rand(1,10),
            'yazarId'=>rand(1,10),
            'yayinEviId'=>rand(1,10),
            'dilId'=>rand(1,10)
        ];
    }
}
