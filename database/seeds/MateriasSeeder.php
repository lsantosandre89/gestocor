<?php

use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert(
            [
                'nome' => 'Português',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Matemática',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Geografia',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Inglês',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'História',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Química',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Física',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Biologia',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Educação Física',
            ]);
        DB::table('materias')->insert(
            [
                'nome' => 'Artes',
            ]
        );
    }
}
