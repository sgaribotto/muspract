<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            ['id' => 1, 'name' => "Activo"],
            ['id' => 2, 'name' => "Repaso"],
            ['id' => 3, 'name' => "Pendiente"],
            ['id' => 4, 'name' => "Cancelado"],
        ]);
    }
}
