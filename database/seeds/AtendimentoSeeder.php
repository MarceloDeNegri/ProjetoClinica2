<?php

use Illuminate\Database\Seeder;

class AtendimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atendimentos')->insert([
            'hora_inicio'=>'09:00:00',
            'hora_fim'=>'09:30:00',
            'agendamento_id'=>1,
            ]);
            DB::table('atendimentos')->insert([
                'hora_inicio'=>'10:00:00',
                'hora_fim'=>'10:30:00',
                'agendamento_id'=>2,
                ]);
                DB::table('atendimentos')->insert([
                    'hora_inicio'=>'11:00:00',
                    'hora_fim'=>'11:30:00',
                    'agendamento_id'=>3,
                    ]);
                    DB::table('atendimentos')->insert([
                        'hora_inicio'=>'10:00:00',
                        'hora_fim'=>'11:30:00',
                        'agendamento_id'=>4,
                        ]);
                        DB::table('atendimentos')->insert([
                            'hora_inicio'=>'10:00:00',
                            'hora_fim'=>'10:30:00',
                            'agendamento_id'=>5,
                            ]);
    }
}
