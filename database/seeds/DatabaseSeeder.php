<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<11 ; $i++) {
            DB::table('users')->insert([
                'name' => 'usuario'.random_int(0, 99),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('123'),
             ]);
       }

        for ($i=1; $i<11 ; $i++) {
            DB::table('turmas')->insert([
            'descricao' => 'turma'.str_random(3),
            ]);
        }

        for ($i=1; $i<11 ; $i++) {
            DB::table('alunos')->insert([
            'ra' => 'ra'.random_int(0, 99),
            'nome' => 'nome'.str_random(10),
            'turmas_id' => 11,
            ]);
        }

        for ($i=1; $i<3 ; $i++) {
            DB::table('niveisacesso')->insert([
            'nome' => 'acesso'.str_random(10),
            ]);
        }

        for ($i=1; $i<3 ; $i++) {
            DB::table('tiposocorrencias')->insert([
            'descricao' => 'tipo'.str_random(10),
            ]);
        }

        for ($i=1; $i<11 ; $i++) {
            DB::table('materias')->insert([
            'nome' => 'materia'.random_int(0, 11),
            ]);
        }


    }
}
