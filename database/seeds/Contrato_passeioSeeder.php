<?php

use App\Contrato_passeio;
use Illuminate\Database\Seeder;

class Contrato_passeioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contrato_passeio::class, 10)->create();
    }
}