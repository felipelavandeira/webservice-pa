<?php

use Illuminate\Database\Seeder;

class DatabaseAula extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aulas')->insert([
            'schedule' => '2019-05-13 14:53:32',
            'matter' => 'Aula Teste',
            'description' => 'Aula de teste',
            'disciplina_id'=> 1,
        ]);

        DB::table('aulas')->insert([
            'schedule' => '2019-05-14 19:00:00',
            'matter' => 'Aula Teste1',
            'description' => 'Aula de teste1',
            'disciplina_id'=>2,
        ]);
        DB::table('aulas')->insert([
            'schedule' => '2019-05-14 21:00:00',
            'matter' => 'Aula Teste2',
            'description' => 'Aula de teste2',
            'disciplina_id'=>3,
        ]);

        DB::table('aulas')->insert([
            'schedule' => '2019-05-14 21:00:00',
            'matter' => 'Aula Teste3',
            'description' => 'Aula de teste3',
            'disciplina_id'=>1,
        ]);

        DB::table('aulas')->insert([
            'schedule' => '2019-05-14 21:00:00',
            'matter' => 'Aula Teste4',
            'description' => 'Aula de teste4',
            'disciplina_id'=>2,
        ]);
    }
}
