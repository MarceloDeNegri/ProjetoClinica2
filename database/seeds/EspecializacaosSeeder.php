<?php

use Illuminate\Database\Seeder;

class EspecializacaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especializacoes')->insert([
        'nome'=>'Clinico',
        'descricao'=>'Faz consultas em todas as areas desejadas',]);

        DB::table('especializacoes')->insert([
        'nome'=>'Odontologia',
        'descricao'=>' Odontologia cuida da saúde bucal, desde a mastigação até a estética. ',]);

        DB::table('especializacoes')->insert([
        'nome'=>'Ortopedia',
        'descricao'=>' A ortopedia é a especialidade médica que cuida das doenças e deformidades relacionadas aos elementos do aparelho locomotor, como ossos, músculos, ligamentos e articulações. ',]);

         DB::table('especializacoes')->insert([
        'nome'=>'Neurologista',
        'descricao'=>' Cuida da parte neuromotora ',]);
    }
}
