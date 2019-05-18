<?php

use Illuminate\Database\Seeder;

class DatabaseCurso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'name' => 'Sistemas',
        ]);

        DB::table('cursos')->insert([
            'name' => 'Psico',
        ]);
        DB::table('cursos')->insert([
            'name' => 'Engenharia',
        ]);
        DB::table('cursos')->insert([
            'name' => 'Quimica',
        ]);
        DB::table('cursos')->insert([
            'name' => 'Administração',
        ]);
    }
}
