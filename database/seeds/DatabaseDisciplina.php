<?php

use Illuminate\Database\Seeder;

class DatabaseDisciplina extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            'name' => 'Programação para Web III',
            'max_absence' => 20,
            'curso_id' => 1,
        ]);
        DB::table('disciplinas')->insert([
            'name' => 'Matematica',
            'max_absence' => 20,
            'curso_id' => 3,
        ]);
        DB::table('disciplinas')->insert([
            'name' => 'Psicanalise',
            'max_absence' => 20,
            'curso_id' => 2,
        ]);
        DB::table('disciplinas')->insert([
            'name' => 'Linguagem de Programacao',
            'max_absence' => 20,
            'curso_id' => 1,
        ]);
        DB::table('disciplinas')->insert([
            'name' => 'Linux',
            'max_absence' => 28,
            'curso_id' => 2,
        ]);
    }
}
