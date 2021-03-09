<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Dil::factory(10)->create();
    }
}
