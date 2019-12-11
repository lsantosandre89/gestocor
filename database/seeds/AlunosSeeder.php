<?php

use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('pt_BR');
        for ($i=1; $i<100; $i++) {
            DB::table('alunos')->insert(
                [
                    'nome' => $faker->name,
                    'ra' => $faker->randomNumber(8),
                    'turmas_id' => rand(1,9),
                ]
            );
        }
    }
}
