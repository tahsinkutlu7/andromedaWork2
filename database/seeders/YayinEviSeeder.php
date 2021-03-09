<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class YayinEviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\YayinEvi::factory(10)->create();
    }
}
