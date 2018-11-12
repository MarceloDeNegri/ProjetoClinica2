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
        'Nome'=>'Jaira',
        'crm'=>'12345',
        'user_id'=>1,
        'especializacao_id'=>1,

        ]);
        DB::table('medicos')->insert([
            'Nome'=>'Paulo',
        'crm'=>'123456',
        'user_id'=>2,
        'especializacao_id'=>2,

        ]);
        DB::table('medicos')->insert([
            'Nome'=>'Pedro',
        'crm'=>'12345',
        'user_id'=>3,
        'especializacao_id'=>3,

        ]);
    }
}
