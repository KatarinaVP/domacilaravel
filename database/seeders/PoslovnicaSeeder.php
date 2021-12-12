<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poslovnica;

class PoslovnicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poslovnica::factory()->count(20)->create();
    }
}
