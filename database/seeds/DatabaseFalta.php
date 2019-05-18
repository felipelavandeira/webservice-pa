<?php

use Illuminate\Database\Seeder;

class DatabaseFalta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faltas')->insert([
            'date' => '2019-05-13 14:53:32',
            'disciplina_id'=>1,
            'user_id'=>1
        ]);

        DB::table('faltas')->insert([
            'date' => '2019-05-13 21:00:00',
            'disciplina_id'=>1,
            'user_id'=>1
        ]);
        DB::table('faltas')->insert([
            'date' => '2019-05-14 19:00:00',
            'disciplina_id'=>2,
            'user_id'=>1
        ]);
        DB::table('faltas')->insert([
            'date' => '2019-05-15 19:00:00',
            'disciplina_id'=>1,
            'user_id'=>2
        ]);
        DB::table('faltas')->insert([
            'date' => '2019-05-16 19:00:00',
            'disciplina_id'=>2,
            'user_id'=>2
        ]);
    }
}
