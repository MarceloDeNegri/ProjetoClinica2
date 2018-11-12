<?php

use Illuminate\Database\Seeder;

class AtendenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atendentes')->insert([
        'Nome'=>'Marcelo',
        'dtAdmissao'=>'2003-09-09',
        'cracha'=>'34567890',
        'user_id'=>1,
        ]);
        DB::table('atendentes')->insert([
            'Nome'=>'Raiane',
            'dtAdmissao'=>'2003-10-09',
            'cracha'=>'34567890',
            'user_id'=>2,
            ]);
            DB::table('atendentes')->insert([
                'Nome'=>'Roberto',
                'dtAdmissao'=>'2005-09-09',
                'cracha'=>'34567890',
                'user_id'=>3,
                ]);
    }
}
