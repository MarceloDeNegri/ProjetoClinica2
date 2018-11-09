<?php



Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'pacientes', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'pacientes',           'uses'=>'PacienteController@index']);
        Route::get('create',                ['as'=>'pacientes.create',    'uses'=>'PacienteController@create']);
        Route::get('{id}/destroy',          ['as'=>'pacientes.destroy',   'uses'=>'PacienteController@destroy']);
        Route::get('{id}/edit',             ['as'=>'pacientes.edit',      'uses'=>'PacienteController@edit']);
        Route::put('{id}/update',           ['as'=>'pacientes.update',    'uses'=>'PacienteController@update']);
        Route::post('store',                ['as'=>'pacientes.store',     'uses'=>'PacienteController@store']);
        Route::get('{id}/delete',           ['as'=>'pacientes.delete',    'uses'=>'PacienteController@delete']);

        });

    Route::group(['prefix'=>'convenios', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'convenios',           'uses'=>'ConvenioController@index']);
        Route::get('create',                ['as'=>'convenios.create',    'uses'=>'ConvenioController@create']);
        Route::get('{id}/destroy',          ['as'=>'convenios.destroy',   'uses'=>'ConvenioController@destroy']);
        Route::get('{id}/edit',             ['as'=>'convenios.edit',      'uses'=>'ConvenioController@edit']);
        Route::put('{id}/update',           ['as'=>'convenios.update',    'uses'=>'ConvenioController@update']);
        Route::post('store',                ['as'=>'convenios.store',     'uses'=>'ConvenioController@store']);
        Route::get('{id}/delete',           ['as'=>'convenios.delete',    'uses'=>'ConvenioController@delete']);
            });

        Route::group(['prefix'=>'users', 'where'=>['id' => '[0-9]+']],function() {

            Route::get('',                      ['as'=>'users',           'uses'=>'UserController@index']);
            Route::get('create',                ['as'=>'users.create',    'uses'=>'UserController@create']);
            Route::get('{id}/destroy',          ['as'=>'users.destroy',   'uses'=>'UserController@destroy']);
            Route::get('{id}/edit',             ['as'=>'users.edit',      'uses'=>'UserController@edit']);
            Route::put('{id}/update',           ['as'=>'users.update',    'uses'=>'UserController@update']);
            Route::post('store',                ['as'=>'users.store',     'uses'=>'UserController@store']);
            Route::get('{id}/delete',           ['as'=>'users.delete',    'uses'=>'UserController@delete']);
                });

    Route::group(['prefix'=>'especializacoes', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'especializacoes',           'uses'=>'EspecializacaoController@index']);
        Route::get('create',                ['as'=>'especializacoes.create',    'uses'=>'EspecializacaoController@create']);
        Route::get('{id}/destroy',          ['as'=>'especializacoes.destroy',   'uses'=>'EspecializacaoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'especializacoes.edit',      'uses'=>'EspecializacaoController@edit']);
        Route::put('{id}/update',           ['as'=>'especializacoes.update',    'uses'=>'EspecializacaoController@update']);
        Route::post('store',                ['as'=>'especializacoes.store',     'uses'=>'EspecializacaoController@store']);
        Route::get('{id}/delete',           ['as'=>'especializacoes.delete',    'uses'=>'EspecializacaoController@delete']);
                    });

     Route::group(['prefix'=>'medicos', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'medicos',           'uses'=>'MedicoController@index']);
        Route::get('create',                ['as'=>'medicos.create',    'uses'=>'MedicoController@create']);
        Route::get('{id}/destroy',          ['as'=>'medicos.destroy',   'uses'=>'MedicoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'medicos.edit',      'uses'=>'MedicoController@edit']);
        Route::put('{id}/update',           ['as'=>'medicos.update',    'uses'=>'MedicoController@update']);
        Route::post('store',                ['as'=>'medicos.store',     'uses'=>'MedicoController@store']);

                    });

    Route::group(['prefix'=>'responsaveis', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'responsaveis',           'uses'=>'ResponsavelController@index']);
        Route::get('create',                ['as'=>'responsaveis.create',    'uses'=>'ResponsavelController@create']);
        Route::get('{id}/destroy',          ['as'=>'responsaveis.destroy',   'uses'=>'ResponsavelController@destroy']);
        Route::get('{id}/edit',             ['as'=>'responsaveis.edit',      'uses'=>'ResponsavelController@edit']);
        Route::put('{id}/update',           ['as'=>'responsaveis.update',    'uses'=>'ResponsavelController@update']);
        Route::post('store',                ['as'=>'responsaveis.store',     'uses'=>'ResponsavelController@store']);

                                    });
    Route::group(['prefix'=>'agendamentos', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'agendamentos',           'uses'=>'AgendamentoController@index']);
        Route::get('create',                ['as'=>'agendamentos.create',    'uses'=>'AgendamentoController@create']);
        Route::get('{id}/destroy',          ['as'=>'agendamentos.destroy',   'uses'=>'AgendamentoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'agendamentos.edit',      'uses'=>'AgendamentoController@edit']);
        Route::put('{id}/update',           ['as'=>'agendamentos.update',    'uses'=>'AgendamentoController@update']);
        Route::post('store',                ['as'=>'agendamentos.store',     'uses'=>'AgendamentoController@store']);
        Route::get('{id}/delete',           ['as'=>'agendamentos.delete',    'uses'=>'AgendamentoController@delete']);

    });

    Route::group(['prefix'=>'atendimentos', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'atendimentos',           'uses'=>'AtendimentoController@index']);
        Route::get('{id}/create',                ['as'=>'atendimentos.create',    'uses'=>'AtendimentoController@create']);
        Route::get('{id}/destroy',          ['as'=>'atendimentos.destroy',   'uses'=>'AtendimentoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'atendimentos.edit',      'uses'=>'AtendimentoController@edit']);
        Route::put('{id}/update',           ['as'=>'atendimentos.update',    'uses'=>'AtendimentoController@update']);
        Route::post('store',                ['as'=>'atendimentos.store',     'uses'=>'AtendimentoController@store']);
        Route::get('{id}/delete',           ['as'=>'atendimentos.delete',    'uses'=>'AtendimentoController@delete']);

    });
    Route::group(['prefix'=>'atendentes', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'atendentes',           'uses'=>'AtendenteController@index']);
        Route::get('create',                ['as'=>'atendentes.create',    'uses'=>'AtendenteController@create']);
        Route::get('{id}/destroy',          ['as'=>'atendentes.destroy',   'uses'=>'AtendenteController@destroy']);
        Route::get('{id}/edit',             ['as'=>'atendentes.edit',      'uses'=>'AtendenteController@edit']);
        Route::put('{id}/update',           ['as'=>'atendentes.update',    'uses'=>'AtendenteController@update']);
        Route::post('store',                ['as'=>'atendentes.store',     'uses'=>'AtendenteController@store']);
        Route::get('{id}/delete',           ['as'=>'atendentes.delete',    'uses'=>'AtendenteController@delete']);

    });
    Route::group(['prefix'=>'prontuarios', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'prontuarios',           'uses'=>'ProntuarioController@index']);
        Route::get('{id}/create',           ['as'=>'prontuarios.create',    'uses'=>'ProntuarioController@create']);
        Route::get('{id}/destroy',          ['as'=>'prontuarios.destroy',   'uses'=>'ProntuarioController@destroy']);
        Route::get('{id}/edit',             ['as'=>'prontuarios.edit',      'uses'=>'ProntuarioController@edit']);
        Route::put('{id}/update',           ['as'=>'prontuarios.update',    'uses'=>'ProntuarioController@update']);
        Route::post('store',                ['as'=>'prontuarios.store',     'uses'=>'ProntuarioController@store']);
        Route::get('{id}/delete',           ['as'=>'prontuarios.delete',    'uses'=>'ProntuarioController@delete']);

    });

});


Route::get('/home', 'HomeController@index')->name('home');