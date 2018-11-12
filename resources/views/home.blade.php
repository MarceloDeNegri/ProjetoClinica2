@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">


                            <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                      <div class="inner">
                                        <h3>Usuarios </h3>

                                        <p>Cadastro</p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion md-person-add"></i>
                                      </div>
                                      <a href="{{ url('users/create') }}" class="small-box-footer">Registrar <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>

                                  <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                          <div class="inner">
                                            <h3>Medicos </h3>

                                            <p>Cadastro</p>
                                          </div>
                                          <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                          </div>
                                          <a href="medicos/createMaster" class="small-box-footer">Registrar <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                      </div>

                                      <div class="col-lg-3 col-xs-6">
                                            <!-- small box -->
                                            <div class="small-box bg-red">
                                              <div class="inner">
                                                <h3>Pacientes </h3>

                                                <p>Cadastro</p>
                                              </div>
                                              <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                              </div>
                                              <a href="pacientes/create" class="small-box-footer">Registrar <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-xs-6">
                                                <!-- small box -->
                                                <div class="small-box bg-blue">
                                                  <div class="inner">
                                                    <h3>Responsaveis </h3>

                                                    <p>Cadastro</p>
                                                  </div>
                                                  <div class="icon">
                                                    <i class="ion ion-person-add"></i>
                                                  </div>
                                                  <a href="responsaveis/create" class="small-box-footer">Registrar <i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                              </div>



                        </div>
				</div>
			</div>
		</div>
	</div>
@endsection
