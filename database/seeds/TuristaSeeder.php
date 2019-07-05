<?php

use App\Turista;
use Illuminate\Database\Seeder;

class TuristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turistas')->delete();
        factory(Turista::class, 10)->create();
    }
}