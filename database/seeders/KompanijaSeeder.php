<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kompanija;

class KompanijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kompanija::factory()->count(20)->create();
    }
}
