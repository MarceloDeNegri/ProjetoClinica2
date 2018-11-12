<?php

use Illuminate\Database\Seeder;

class ProntuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prontuarios')->insert([
            'peso'=>'22 kg',
            'altura'=>'122 cm',
            'idade'=>3,
            'observacao'=>"está tendo uma ótima melhora",
            'alimentacao'=>"Ótima alimentacao",
            'febre'=>"37° normal",
            'dores'=>"Se sente bem",
            'atendimento_id'=>1,
            ]);

            DB::table('prontuarios')->insert([
                'peso'=>'22 kg',
                'altura'=>'122 cm',
                'idade'=>3,
                'observacao'=>"está tendo uma ótima melhora",
                'alimentacao'=>"Ótima alimentacao",
                'febre'=>"37,5° normal",
                'dores'=>"Se sente bem",
                'atendimento_id'=>2,
            ]);
                DB::table('prontuarios')->insert([
                    'peso'=>'20 kg',
                    'altura'=>'127 cm',
                    'idade'=>4,
                    'observacao'=>"está tendo uma ótima melhora",
                    'alimentacao'=>"Ótima alimentacao",
                    'febre'=>"37° normal",
                    'dores'=>"Se sente bem",
                    'atendimento_id'=>3,
                    ]);
                    DB::table('prontuarios')->insert([
                        'peso'=>'30 kg',
                        'altura'=>'138 cm',
                        'idade'=>5,
                        'observacao'=>"está tendo uma ótima melhora",
                        'alimentacao'=>"Ótima alimentacao",
                        'febre'=>"37° normal",
                        'dores'=>"Se sente bem",
                        'atendimento_id'=>4,
                        ]);
                        DB::table('prontuarios')->insert([
                            'peso'=>'15 kg',
                            'altura'=>'118 cm',
                            'idade'=>2,
                            'observacao'=>"está tendo uma ótima melhora",
                            'alimentacao'=>"Ótima alimentacao",
                            'febre'=>"37° normal",
                            'dores'=>"Se sente bem",
                            'atendimento_id'=>5,
                            ]);
    }
}
