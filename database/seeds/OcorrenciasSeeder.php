<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class OcorrenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
        for ($i=1; $i<20; $i++) {
            DB::table('ocorrencias')->insert(
                [
                    'alunos_id' => rand(1,99),
                    'materias_id' => rand(1,10),
                    'tipos_id' => rand(1,2),
                    'users_id' => 1,
                    'descricao' => $faker->text(48),
                    'data' => '2019-10-10 08:00:00',
                ]
            );
        }
    }
}
