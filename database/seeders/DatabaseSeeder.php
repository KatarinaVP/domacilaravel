<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\KompanijaSeeder;
use Database\Seeders\PoslovnicaSeeder;
use Database\Seeders\ZaposleniSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ks = new KompanijaSeeder();
        $ks->run();
        $ps = new PoslovnicaSeeder();
        $ps->run();
        $zs = new ZaposleniSeeder();
        $zs->run();
    }
}
