<?php

use Illuminate\Database\Seeder;

class DatabaseDisciplinaProfessor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplina_professor')->insert([
            'disciplina_id'=>1,
            'professor_id'=>1
        ]);
        DB::table('disciplina_professor')->insert([
            'disciplina_id'=>1,
            'professor_id'=>2
        ]);
        DB::table('disciplina_professor')->insert([
            'disciplina_id'=>2,
            'professor_id'=>1
        ]);
        DB::table('disciplina_professor')->insert([
            'disciplina_id'=>3,
            'professor_id'=>2
        ]);
    }
}
