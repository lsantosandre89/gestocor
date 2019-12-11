<?php

use Illuminate\Database\Seeder;

class TiposOcorrenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tiposocorrencias')->insert(
            [
                'descricao' => 'Disciplinar',
            ]);
        DB::table('tiposocorrencias')->insert(
            [
                'descricao' => 'Médica',
            ]
        );
    }
}
