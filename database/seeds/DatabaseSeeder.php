<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * DatavaseSeeder vau receber
     *
     * @return void
     */
    public function run()
    {
        $this->call(LivrosTableSeeder::class);
    }
}
