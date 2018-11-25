<?php

use Illuminate\Database\Seeder;

class ResponsaveisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responsaveis')->insert([
            'Nome'=>'Neusa',
            'sobrenome'=>'Neusa',
            'email'=>'Neusa',
            'telefone'=>'Neusa',
            ]);

    }
}
