<?php

use Illuminate\Database\Seeder;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendamentos')->insert([
            'dtConsulta'=>'2018-10-09',
            'hora'=>'09:00:00',
            'condicao'=>'10 x',
            'paciente_id'=>1,
            'medico_id'=>1,
            'convenio_id'=>1,
            ]);

        DB::table('agendamentos')->insert([
                'dtConsulta'=>'2018-11-09',
                'hora'=>'09:00:00',
                'condicao'=>'10 x',
                'paciente_id'=>1,
                'medico_id'=>2,
                'convenio_id'=>2,
                ]);
         DB::table('agendamentos')->insert([
                    'dtConsulta'=>'2018-12-09',
                    'hora'=>'09:00:00',
                    'condicao'=>'10 x',
                    'paciente_id'=>2,
                    'medico_id'=>3,
                    'convenio_id'=>1,
                    ]);
                    DB::table('agendamentos')->insert([
                        'dtConsulta'=>'2018-12-11',
                        'hora'=>'09:00:00',
                        'condicao'=>'10 x',
                        'paciente_id'=>2,
                        'medico_id'=>2,
                        'convenio_id'=>1,
                        ]);
                        DB::table('agendamentos')->insert([
                            'dtConsulta'=>'2018-12-10',
                            'hora'=>'09:00:00',
                            'condicao'=>'10 x',
                            'paciente_id'=>3,
                            'medico_id'=>3,
                            'convenio_id'=>3,
                            ]);
    }
}
