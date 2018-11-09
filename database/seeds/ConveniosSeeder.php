<?php

use Illuminate\Database\Seeder;

class ConveniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('convenios')->insert([
            'nome'=>'Perdigão',
            'numero'=>'12345',
            'plano'=>'Funcionarios',
            'valor'=>150.00,
            ]);
        DB::table('convenios')->insert([
                'nome'=>'Unimed',
                'numero'=>'12345',
                'plano'=>'Melhor Idade',
                'valor'=>170.00,
                ]);
        DB::table('convenios')->insert([
                    'nome'=>'SulMed',
                    'numero'=>'12345',
                    'plano'=>'Geral',
                    'valor'=>200.00,
                    ]);

    }
}
