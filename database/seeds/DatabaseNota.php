<?php

use Illuminate\Database\Seeder;

class DatabaseNota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'grade' => 7.5,
            'grade_sort' => 'n1',
            'disciplina_id' => 1,
            'user_id'=> 1,
        ]);

        DB::table('notas')->insert([
            'grade' => 5,
            'grade_sort' => 'n2',
            'disciplina_id' => 4,
            'user_id'=>2,
        ]);
        DB::table('notas')->insert([
            'grade' => 8.2,
            'grade_sort' => 'sp',
            'disciplina_id' => 2,
            'user_id'=>3,
        ]);

        DB::table('notas')->insert([
            'grade' => 8.2,
            'grade_sort' => 'sp',
            'disciplina_id' => 1,
            'user_id'=>1,
        ]);
    }
}
