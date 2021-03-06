@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Principal</div>

					<div class="panel-body">


                            @if (Auth::user()->nivel_acesso == 1 )
<center>
                            <div class="col-lg-3 col-xs-4">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                      <div class="inner">
                                        <h3>{{\App\User::where('nivel_acesso', 3)->where('status', 'A')->count() }}</h3>

                                        <p>Pacientes</p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion-ios-person-add"></i>
                                      </div>
                                      <a href="{{ url('users/createPaciente') }}" class="small-box-footer">Cadastrar <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-xs-4">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                          <div class="inner">
                                            <h3>{{\App\User::where('nivel_acesso', 2)->where('status', 'A')->count() }}</h3>

                                            <p>Medicos</p>
                                          </div>
                                          <div class="icon">
                                            <i class="ion-ios-person-add"></i>
                                          </div>
                                          <a href="{{ url('users/createMedico') }}" class="small-box-footer">Cadastrar <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                      </div>




                                          <div class="col-lg-3 col-xs-4">
                                                <!-- small box -->
                                                <div class="small-box bg-blue">
                                                  <div class="inner">
                                                    <h3>{{\App\Responsavel::count()}} </h3>
                                                    <h4>Responsaveis</h4>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="ion-ios-person-add"></i>
                                                  </div>
                                                  <a href="responsaveis/create" class="small-box-footer">Cadastrar <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                              </div>


                                              <div class="col-lg-3 col-xs-4">
                                                <!-- small box -->
                                                <div class="small-box bg-orange">
                                                  <div class="inner">


                                                    <h2>Agendamento</h2>
                                                    <h7>Consultas</h7>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="ion-md-calendar"></i>
                                                  </div>
                                                  <a href="{{ url('agendamentos/create') }}" class="small-box-footer">Agendar <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                              </div>

                                              <div class="col-lg-3 col-xs-4">
                                                <!-- small box -->
                                                <div class="small-box bg-orange">
                                                  <div class="inner">
                                                    <h2>Lista</h2>

                                                    <p>Pacientes</p>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="ion-md-list-box"></i>
                                                  </div>
                                                  <a href="{{ url('users/indexPaciente') }}" class="small-box-footer">listar <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-xs-4">
                                                    <!-- small box -->
                                                    <div class="small-box bg-blue">
                                                      <div class="inner">
                                                        <h2>Lista</h2>

                                                        <p>Médicos</p>
                                                      </div>
                                                      <div class="icon">
                                                        <i class="ion-md-list-box"></i>
                                                      </div>
                                                      <a href="{{ url('users/indexMedico') }}" class="small-box-footer">listar <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-xs-4">
                                                        <!-- small box -->
                                                        <div class="small-box bg-green">
                                                          <div class="inner">
                                                            <h2>Lista</h2>

                                                            <p>Responsaveis</p>
                                                          </div>
                                                          <div class="icon">
                                                            <i class="ion-md-list-box"></i>
                                                          </div>
                                                          <a href="{{ url('responsaveis') }}" class="small-box-footer">listar <i class="fa fa-arrow-circle-right"></i></a>
                                                        </div>
                                                    </div>

                                            <div class="col-lg-3 col-xs-4">
                                                <!-- small box -->
                                                <div class="small-box bg-yellow">
                                                  <div class="inner">
                                                    <h2>{{\App\Agendamento::count()}}</h2>

                                                    <p>Consultas</p>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="ion-ios-medkit"></i>
                                                  </div>
                                                  <a href="{{ url('agendamentos') }}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                              </div>
</center>
                            </div>
                                              @endif


                                              @if (Auth::user()->nivel_acesso == 2 )
                                              <div class="col-lg-3 col-xs-4">
                                                    <!-- small box -->
                                                    <div class="small-box bg-green">
                                                      <div class="inner">

                                                        <p>Listar</p>
                                                        <p>Agendamentos</p>
                                                      </div>
                                                      <div class="icon">
                                                        <i class="ion-md-list-box"></i>
                                                      </div>
                                                      <a href="{{ url('agendamentos/indexMedico') }}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                  </div>

                                                  <div class="col-lg-3 col-xs-4">
                                                        <!-- small box -->
                                                        <div class="small-box bg-blue">
                                                          <div class="inner">

                                                            <p>Listar</p>
                                                            <p>Atendimentos</p>
                                                          </div>
                                                          <div class="icon">
                                                            <i class="ion-md-list-box"></i>
                                                          </div>
                                                          <a href="{{ url('atendimentos') }}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                                                        </div>

                                                      </div>

                                                      <div class="col-lg-3 col-xs-4">
                                                            <!-- small box -->
                                                            <div class="small-box bg-orange">
                                                              <div class="inner">

                                                                <p>Listar</p>
                                                                <p>Prontuarios</p>
                                                              </div>
                                                              <div class="icon">
                                                                <i class="ion-md-list-box"></i>
                                                              </div>
                                                              <a href="{{ url('prontuarios') }}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                                                            </div>
                                                          </div>


                                              @endif






                                              @if (Auth::user()->nivel_acesso == 3 )
                                              <div class="col-lg-3 col-xs-4">
                                                    <!-- small box -->
                                                    <div class="small-box bg-orange">
                                                      <div class="inner">

                                                        <p>Listar</p>
                                                        <p>Prontuarios</p>
                                                      </div>
                                                      <div class="icon">
                                                        <i class="ion-md-list-box"></i>
                                                      </div>
                                                      <a href="{{ url('prontuarios') }}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                  </div>

                                                  <div class="col-lg-3 col-xs-4">
                                                        <!-- small box -->
                                                        <div class="small-box bg-green">
                                                          <div class="inner">

                                                            <p>Listar</p>
                                                            <p>Avaliados</p>
                                                          </div>
                                                          <div class="icon">
                                                            <i class="ion-md-list-box"></i>
                                                          </div>
                                                          <a href="{{ url('avaliacoes') }}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                                                        </div>
                                                      </div>

                                                      <div class="col-lg-3 col-xs-4">
                                                            <!-- small box -->
                                                            <div class="small-box bg-blue">
                                                              <div class="inner">

                                                                <p>Avaliar</p>
                                                                <p>Consultas</p>
                                                              </div>
                                                              <div class="icon">
                                                                <i class="ion-md-list-box"></i>
                                                              </div>
                                                              <a href="{{ url('atendimentos') }}" class="small-box-footer">Avaliar <i class="fa fa-arrow-circle-right"></i></a>
                                                            </div>
                                                          </div>
                                              @endif




                        </div>
				</div>
			</div>
		</div>
	</div>
@endsection
