<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('telefone', 30);
            $table->string('cpf', 55);
            $table->string('rg', 55)->nullable();
            $table->date('dtNascimento');
            $table->string('status');
            $table->integer('nivel_acesso');
            //Medicos
            $table->string('crm',50)->nullable();
            $table->integer('especializacao_id')->unsigned()->nullable();
            $table->foreign('especializacao_id')->references('id')->on('especializacoes')->nullable()->onDelete('cascade');
            //Atendentes
            $table->string('cracha')->nullable();
            //Pacientes
            $table->string('tratamento',250)->nullable();
            $table->string('alergico', 250)->nullable();
            $table->string('convulsao',100)->nullable();
            $table->string('diabete', 100)->nullable();
            $table->string('marcapasso', 15)->nullable();
            $table->string('tipoSanguineo', 15)->nullable();
            $table->integer('responsavel_id')->unsigned()->nullable();
            $table->foreign('responsavel_id')->references('id')->on('responsaveis')->nullable()->onDelete('cascade');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
