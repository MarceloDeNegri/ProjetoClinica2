<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ResponsaveisSeeder::class);
        $this->call(EspecializacaosSeeder::class);
         $this->call(UsersSeeder::class);
         //$this->call(MedicosSeeder::class);
         $this->call(ConveniosSeeder::class);
         //$this->call(PacientesSeeder::class);
         //$this->call(AtendenteSeeder::class);
         $this->call(AgendamentoSeeder::class);
         $this->call(AtendimentoSeeder::class);
         $this->call(ProntuarioSeeder::class);






    }
}
