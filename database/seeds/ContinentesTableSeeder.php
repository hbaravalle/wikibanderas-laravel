<?php

use Illuminate\Database\Seeder;

class ContinentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continentes')->insert([
            [
                'nombre' => 'América',
                'created_at' => now()
            ],
            [
                'nombre' => 'África',
                'created_at' => now()
            ],
            [
                'nombre' => 'Europa',
                'created_at' => now()
            ],
            [
                'nombre' => 'Asia',
                'created_at' => now()
            ],
            [
                'nombre' => 'Oceanía',
                'created_at' => now()
            ]
        ]);
    }
}
