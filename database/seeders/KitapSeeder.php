<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KitapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kitap::factory(1000)->create();
    }
}
