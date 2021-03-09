<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class YazarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Yazar::factory(10)->create();
    }
}
