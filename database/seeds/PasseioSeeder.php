<?php

use App\Passeio;
use Illuminate\Database\Seeder;

class PasseioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Passeio::class, 10)->create();
    }
}