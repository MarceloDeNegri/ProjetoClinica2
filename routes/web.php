<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
    if(Auth::check()){
        if(Auth::user()->nivel_acesso == 1){
            return redirect()->route('convenios');
        }elseif (Auth::user()->nivel_acesso == 2){
                return redirect()->route('agendamentos');
            }elseif (Auth::user()->nivel_acesso == 3){
                return redirect()->route('medicos');
        }else{
            return view('welcome');
        }
    }else {
        return view('vendor/adminlte/auth/login');
    }
});





Route::group(['middleware' => 'auth'], function () {


        Route::group(['prefix'=>'arquivos', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('listagem',              ['as'=>'arquivos',           'uses'=>'ArquivosController@index']);
        Route::get('create',                ['as'=>'arquivos.create',    'uses'=>'ArquivosController@create']);
        Route::get('{id}/destroy',          ['as'=>'arquivos.destroy',   'uses'=>'ArquivosController@destroy']);
        Route::get('{id}/edit',             ['as'=>'arquivos.edit',      'uses'=>'ArquivosController@edit']);
        Route::put('{id}/update',           ['as'=>'arquivos.update',    'uses'=>'ArquivosController@update']);
        Route::post('store',                ['as'=>'arquivos.store',     'uses'=>'ArquivosController@store']);



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

        Route::group(['prefix'=>'users','where'=>['id' => '[0-9]+']],function() {

            Route::get('',                      ['as'=>'users',           'uses'=>'UserController@index']);
            Route::get('indexPaciente',         ['as'=>'users.indexPaciente', 'uses'=>'UserController@indexPaciente']);
            Route::get('indexMedico',           ['as'=>'users.indexMedico', 'uses'=>'UserController@indexMedico']);
            Route::get('indexAtendente',        ['as'=>'users.indexAtendente', 'uses'=>'UserController@indexAtendente']);
            Route::get('createMedico',          ['as'=>'users.createMedico',    'uses'=>'UserController@createMedico']);
            Route::get('createPaciente',        ['as'=>'users.createPaciente',    'uses'=>'UserController@createPaciente']);
            Route::get('create',                ['as'=>'users.create',    'uses'=>'UserController@create']);
            Route::get('{id}/destroy',          ['as'=>'users.destroy',   'uses'=>'UserController@destroy']);
            Route::get('{id}/edit',             ['as'=>'users.edit',      'uses'=>'UserController@edit']);
            Route::put('{id}/update',           ['as'=>'users.update',    'uses'=>'UserController@update']);
            Route::post('store',                ['as'=>'users.store',     'uses'=>'UserController@store']);
            Route::get('{id}/delete',           ['as'=>'users.delete',    'uses'=>'UserController@delete']);
            Route::get('pdf',                   ['as'=>'users.pdf',       'uses'=>'UserController@relatorio']);
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


    Route::group(['prefix'=>'responsaveis', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'responsaveis',           'uses'=>'ResponsavelController@index']);
        Route::get('create',                ['as'=>'responsaveis.create',    'uses'=>'ResponsavelController@create']);
        Route::get('{id}/destroy',          ['as'=>'responsaveis.destroy',   'uses'=>'ResponsavelController@destroy']);
        Route::get('{id}/edit',             ['as'=>'responsaveis.edit',      'uses'=>'ResponsavelController@edit']);
        Route::put('{id}/update',           ['as'=>'responsaveis.update',    'uses'=>'ResponsavelController@update']);
        Route::post('store',                ['as'=>'responsaveis.store',     'uses'=>'ResponsavelController@store']);
        Route::get('{id}/delete',           ['as'=>'responsaveis.delete',    'uses'=>'ResponsavelController@delete']);
        Route::get('import-export-view',    'ResponsavelController@importExportView')->name('import.export.view');
        Route::post('import-file', 'ResponsavelController@importFile')->name('import.file');
        Route::get('export-file/{type}', 'ResponsavelController@exportFile')->name('export.file');

                                    });
    Route::group(['prefix'=>'agendamentos', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'agendamentos',           'uses'=>'AgendamentoController@index']);
        Route::get('indexMedico',           ['as'=>'agendamentos.indexMedico',   'uses'=>'AgendamentoController@indexMedico']);
        Route::get('create',                ['as'=>'agendamentos.create',    'uses'=>'AgendamentoController@create']);
        Route::get('{id}/destroy',          ['as'=>'agendamentos.destroy',   'uses'=>'AgendamentoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'agendamentos.edit',      'uses'=>'AgendamentoController@edit']);
        Route::put('{id}/update',           ['as'=>'agendamentos.update',    'uses'=>'AgendamentoController@update']);
        Route::post('store',                ['as'=>'agendamentos.store',     'uses'=>'AgendamentoController@store']);
        Route::get('{id}/delete',           ['as'=>'agendamentos.delete',    'uses'=>'AgendamentoController@delete']);

    });

    Route::group(['prefix'=>'atendimentos', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'atendimentos',           'uses'=>'AtendimentoController@index']);
        Route::get('{id}/create',           ['as'=>'atendimentos.create',    'uses'=>'AtendimentoController@create']);
        Route::get('{id}/destroy',          ['as'=>'atendimentos.destroy',   'uses'=>'AtendimentoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'atendimentos.edit',      'uses'=>'AtendimentoController@edit']);
        Route::put('{id}/update',           ['as'=>'atendimentos.update',    'uses'=>'AtendimentoController@update']);
        Route::post('store',                ['as'=>'atendimentos.store',     'uses'=>'AtendimentoController@store']);
        Route::get('{id}/delete',           ['as'=>'atendimentos.delete',    'uses'=>'AtendimentoController@delete']);

    });
    Route::group(['prefix'=>'prontuarios','where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'prontuarios',           'uses'=>'ProntuarioController@index']);
        Route::get('{id}/create',           ['as'=>'prontuarios.create',    'uses'=>'ProntuarioController@create']);
        Route::get('{id}/destroy',          ['as'=>'prontuarios.destroy',   'uses'=>'ProntuarioController@destroy']);
        Route::get('{id}/edit',             ['as'=>'prontuarios.edit',      'uses'=>'ProntuarioController@edit']);
        Route::put('{id}/update',           ['as'=>'prontuarios.update',    'uses'=>'ProntuarioController@update']);
        Route::post('store',                ['as'=>'prontuarios.store',     'uses'=>'ProntuarioController@store']);
        Route::get('{id}/delete',           ['as'=>'prontuarios.delete',    'uses'=>'ProntuarioController@delete']);
        Route::post('search',               ['as'=>'prontuarios.search',    'uses'=>'ProntuarioController@search']);
        Route::get('{id}/detail',           ['as'=>'prontuarios.detail',    'uses'=>'ProntuarioController@detail']);
        Route::get('{id}/pdf',              ['as'=>'prontuarios.pdf',       'uses'=>'ProntuarioController@relatorio']);

    });

    Route::group(['prefix'=>'avaliacoes', 'where'=>['id' => '[0-9]+']],function() {

        Route::get('',                      ['as'=>'avaliacoes',           'uses'=>'AvaliacaoController@index']);
        Route::get('{id}/create',           ['as'=>'avaliacoes.create',    'uses'=>'AvaliacaoController@create']);
        Route::get('{id}/destroy',          ['as'=>'avaliacoes.destroy',   'uses'=>'AvaliacaoController@destroy']);
        Route::get('{id}/edit',             ['as'=>'avaliacoes.edit',      'uses'=>'AvaliacaoController@edit']);
        Route::put('{id}/update',           ['as'=>'avaliacoes.update',    'uses'=>'AvaliacaoController@update']);
        Route::post('store',                ['as'=>'avaliacoes.store',     'uses'=>'AvaliacaoController@store']);
        Route::get('{id}/delete',           ['as'=>'avaliacoes.delete',    'uses'=>'AvaliacaoController@delete']);

    });

});




