<?php

use Illuminate\Database\Seeder;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instruments')->insert([
            ['id' => 1, 'name' => "Clarinete"],
            ['id' => 2, 'name' => "Soprano"],
            ['id' => 3, 'name' => "Piano"],
            ['id' => 4, 'name' => "voz"],
        ]);
   
    }
}
