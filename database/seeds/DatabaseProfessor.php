<?php

use Illuminate\Database\Seeder;

class DatabaseProfessor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
            'name' => 'Negrettoo',
        ]);
        DB::table('professors')->insert([
            'name' => 'Camilinho',
        ]);
        DB::table('professors')->insert([
            'name' => 'Ivan',
        ]);

        DB::table('professors')->insert([
            'name' => 'Juninho',
        ]);
        DB::table('professors')->insert([
            'name' => 'Magnata',
        ]);

    }
}
