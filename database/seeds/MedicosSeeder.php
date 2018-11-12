<?php

use Illuminate\Database\Seeder;

class MedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
        'Nome'=>'Guilherme',
        'crm'=>'12345',
        'user_id'=>9,


        ]);
        DB::table('medicos')->insert([
        'Nome'=>'Regis',
        'crm'=>'123456',
        'user_id'=>7,


        ]);
        DB::table('medicos')->insert([
        'Nome'=>'Marisane',
        'crm'=>'12345',
        'user_id'=>8,

        ]);
        DB::table('medicos')->insert([
            'Nome'=>'Enio',
            'crm'=>'12345',
            'user_id'=>13,

            ]);
        DB::table('medicos')->insert([
                'Nome'=>'Roque',
                'crm'=>'12345',
                'user_id'=>14,

                ]);
    }
}
