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
        'Nome'=>'Jurema',
        'dtAdmissao'=>'2003-09-09',
        'cracha'=>'34567890',
        'user_id'=>7,
        ]);
        DB::table('atendentes')->insert([
            'Nome'=>'Juju',
            'dtAdmissao'=>'2003-10-09',
            'cracha'=>'34567890',
            'user_id'=>8,
            ]);
            DB::table('atendentes')->insert([
                'Nome'=>'Jojo',
                'dtAdmissao'=>'2005-09-09',
                'cracha'=>'34567890',
                'user_id'=>9,
                ]);
    }
}
