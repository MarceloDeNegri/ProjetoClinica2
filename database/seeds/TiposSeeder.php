<?php

use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert(['medico_id'=>1, 'especializacao_id'=>2,]);
        DB::table('tipos')->insert(['medico_id'=>2, 'especializacao_id'=>2,]);
        DB::table('tipos')->insert(['medico_id'=>1, 'especializacao_id'=>1,]);
        DB::table('tipos')->insert(['medico_id'=>1, 'especializacao_id'=>3,]);
        DB::table('tipos')->insert(['medico_id'=>3, 'especializacao_id'=>3,]);
        DB::table('tipos')->insert(['medico_id'=>4, 'especializacao_id'=>3,]);
        DB::table('tipos')->insert(['medico_id'=>5, 'especializacao_id'=>1,]);
        DB::table('tipos')->insert(['medico_id'=>5, 'especializacao_id'=>2,]);
    }
}
