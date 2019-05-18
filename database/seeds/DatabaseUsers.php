<?php

use Illuminate\Database\Seeder;

class DatabaseUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'cpf' => 99775,
            'conclusion' => 70,
            'password' => bcrypt('admin'),
            'curso_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.com',
            'cpf' => 99199,
            'conclusion' => 40,
            'password' => bcrypt('usuario'),
            'curso_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => '111',
            'email' => '111@111.com',
            'cpf' => 99199,
            'conclusion' => 40,
            'password' => bcrypt('111'),
            'curso_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'aaa',
            'email' => 'aaa@aaa.com',
            'cpf' => 99199,
            'conclusion' => 40,
            'password' => bcrypt('aaa'),
            'curso_id' => 3
        ]);
    }
}
