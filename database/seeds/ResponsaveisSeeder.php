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
            'user_id'=>4,
            ]);
        DB::table('responsaveis')->insert([
            'Nome'=>'Marcos',
            'user_id'=>5,
            ]);
        DB::table('responsaveis')->insert([
            'Nome'=>'Renato',
            'user_id'=>6,
            ]);
            DB::table('responsaveis')->insert([
                'Nome'=>'Matias',
                'user_id'=>10,
                ]);
                DB::table('responsaveis')->insert([
                    'Nome'=>'Geromel',
                    'user_id'=>11,
                    ]);
                    DB::table('responsaveis')->insert([
                        'Nome'=>'Bolsonaro',
                        'user_id'=>12,
                        ]);
    }
}
