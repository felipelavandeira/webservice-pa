<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DatabaseCurso::class);
        $this->call(DatabaseUsers::class);
        $this->call(DatabaseProfessor::class);
        $this->call(DatabaseDisciplina::class);
        $this->call(DatabaseNota::class);
        $this->call(DatabaseAula::class);
        $this->call(DatabaseFalta::class);
        $this->call(DatabaseDisciplinaProfessor::class);

        
    }
}
