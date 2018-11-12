<?php

use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pacientes')->insert([
            'nome'=>'Arthur',
            'dtNascimento'=>'2015-05-09',
            'Status'=>'A',
            'tipoSanguineo'=>'A',
            'alergico'=>'Não',
            'responsavel_id'=>1,
            ]);

        DB::table('pacientes')->insert([
            'nome'=>'Pedro',
            'dtNascimento'=>'2008-09-08' ,
            'Status'=>'A',
            'tipoSanguineo'=>'A',
            'alergico'=>'Não',
            'responsavel_id'=>2,
            ]);

         DB::table('pacientes')->insert([
            'nome'=>'Joana',
            'dtNascimento'=>'2010-09-08' ,
            'Status'=>'I',
            'tipoSanguineo'=>'AB',
            'alergico'=>'Sim',
            'responsavel_id'=>3,
            ]);
            DB::table('pacientes')->insert([
                'nome'=>'Mateus Henrique',
                'dtNascimento'=>'2010-09-08' ,
                'Status'=>'I',
                'tipoSanguineo'=>'AB',
                'alergico'=>'Sim',
                'responsavel_id'=>4,
                ]);
                DB::table('pacientes')->insert([
                    'nome'=>'Maria João',
                    'dtNascimento'=>'2010-09-08' ,
                    'Status'=>'I',
                    'tipoSanguineo'=>'AB',
                    'alergico'=>'Sim',
                    'responsavel_id'=>5,
                    ]);
                    DB::table('pacientes')->insert([
                        'nome'=>'Gabriela',
                        'dtNascimento'=>'2010-09-08' ,
                        'Status'=>'I',
                        'tipoSanguineo'=>'AB',
                        'alergico'=>'Sim',
                        'responsavel_id'=>6,
                        ]);
    }
}
