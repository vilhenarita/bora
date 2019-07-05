<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TuristaSeeder::class);
        $this->call(GuiaSeeder::class);
        $this->call(ChatSeeder::class);
        $this->call(PasseioSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(Contrato_passeioSeeder::class);
    }
}