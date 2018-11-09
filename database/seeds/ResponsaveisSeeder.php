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
            'user_id'=>4,
            ]);
        DB::table('responsaveis')->insert([
            'user_id'=>5,
            ]);
        DB::table('responsaveis')->insert([
            'user_id'=>6,
            ]);
    }
}
