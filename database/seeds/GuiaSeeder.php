<?php

use App\Guia;
use Illuminate\Database\Seeder;

class GuiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Guia::class, 10)->create();
    }
}