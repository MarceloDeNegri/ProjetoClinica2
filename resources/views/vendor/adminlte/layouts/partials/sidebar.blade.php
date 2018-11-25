<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Acessos</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Principal</span></a></li>
            @if (Auth::user()->nivel_acesso == 1 )


                <li class="treeview">
                        <a href="#">
                            <i class='fa fa-heartbeat'></i> <span>Consultas</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('agendamentos') }}"><i class="fa fa-circle-o"></i> LISTAGEM</a></li>
                            <li><a href="{{ url('agendamentos/create') }}"><i class="fa fa-circle-o"></i> AGENDAR</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class='fa fa-list-ul'></i> <span>Listagem</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('responsaveis') }}"><i class="fa fa-circle-o"></i> RESPONSAVEIS>
                            <li><a href="{{ url('users/indexPaciente') }}"><i class="fa fa-circle-o"></i> PACIENTES</a></li>
                            <li><a href="{{ url('users/indexMedico') }}"><i class="fa fa-circle-o"></i> MEDICOS</a></li>
                        </ul>
                    </li>
                    @endif
                    @if (Auth::user()->nivel_acesso == 2 )

                        <li class="treeview">
                                <a href="#">
                                    <i class='fa fa-heartbeat'></i> <span>Consultas</span>
                                        <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('agendamentos/indexMedico') }}"><i class="fa fa-circle-o"></i> LISTAGEM</a></li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class='fa fa-list-ul'></i> <span>Listagem</span>
                                        <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('atendimentos') }}"><i class="fa fa-circle-o"></i> ATENDIMENTOS</a></li>
                                    <li><a href="{{ url('prontuarios') }}"><i class="fa fa-circle-o"></i> PRONTUARIOS</a></li>
                                </ul>
                            </li>
                           @endif

                           @if (Auth::user()->nivel_acesso == 3 )


                           <li class="treeview">
                                   <a href="#">
                                           <i class="fa fa-user"></i> <span>Avaliações</span>
                                           <span class="pull-right-container">
                                           <i class="fa fa-angle-left pull-right"></i>
                                           </span>
                                   </a>
                                   <ul class="treeview-menu">
                                       <li><a href="{{ url('atendimentos') }}"><i class="fa fa-circle-o"></i> AVALIAR</a></li>
                                       <li><a href="{{ url('avaliacoes') }}"><i class="fa fa-circle-o"></i> AVALIADOS</a></li>
                                   </ul>
                               </li>

                               <li class="treeview">
                                       <a href="#">
                                           <i class='fa fa-heartbeat'></i> <span>Consultas</span>
                                               <span class="pull-right-container">
                                               <i class="fa fa-angle-left pull-right"></i>
                                               </span>
                                       </a>
                                       <ul class="treeview-menu">
                                           <li><a href="{{ url('prontuarios') }}"><i class="fa fa-circle-o"></i> CONSULTA</a></li>


                                       </ul>
                                   </li>
                                   <li class="treeview">
                                    <a href="#">
                                           <i class='fa fa-chain-broken'></i> <span>Postagens</span>
                                               <span class="pull-right-container">
                                               <i class="fa fa-angle-left pull-right"></i>
                                               </span>
                                       </a>
                                       <ul class="treeview-menu">
                                           <li><a href="{{ url('arquivos/listagem') }}"><i class="fa fa-circle-o"></i> LISTA</a></li>
                                           <li><a href="{{ url('arquivos/create') }}"><i class="fa fa-circle-o"></i> CRIAR</a></li>

                                       </ul>
                                   </li>
                                   @endif
                                   @if (Auth::user()->nivel_acesso == 0 )
                                   <li class="treeview">
                                        <a href="#">
                                            <i class='fa fa-heartbeat'></i> <span>Consultas</span>
                                                <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="{{ url('agendamentos') }}"><i class="fa fa-circle-o"></i> LISTAGEM</a></li>
                                            <li><a href="{{ url('agendamentos/create') }}"><i class="fa fa-circle-o"></i> AGENDAR</a></li>

                                        </ul>
                                    </li>

                                   <li><a href="{{ url('avaliacoes') }}"><i class='fa fa-chain-broken'></i> <span>Avaliação</span></a></li>
                           <li class="treeview">
                                   <a href="#">
                                           <i class="fa fa-user"></i> <span>Relatorios</span>
                                           <span class="pull-right-container">
                                           <i class="fa fa-angle-left pull-right"></i>
                                           </span>
                                   </a>
                                   <ul class="treeview-menu">
                                       <li><a href="{{ url('users/pdf') }}"><i class="fa fa-circle-o"></i> USUARIOS</a></li>
                                       <li><a href="{{ url('responsaveis/import-export-view') }}"><i class="fa fa-circle-o"></i> RESPONSAVEIS</a></li>

                                   </ul>
                               </li>


                                   <li class="treeview">
                                       <a href="#">
                                           <i class='fa fa-list-ul'></i> <span>Listagem</span>
                                               <span class="pull-right-container">
                                               <i class="fa fa-angle-left pull-right"></i>
                                               </span>
                                       </a>
                                       <ul class="treeview-menu">
                                           <li><a href="{{ url('responsaveis') }}"><i class="fa fa-circle-o"></i> RESPONSAVEIS>
                                           <li><a href="{{ url('indexPaciente') }}"><i class="fa fa-circle-o"></i> PACIENTES</a></li>
                                           <li><a href="{{ url('indexMedico') }}"><i class="fa fa-circle-o"></i> MEDICOS</a></li>

                                       </ul>
                                   </li>
                                   <li class="treeview">
                                       <a href="#">
                                           <i class='fa fa-chain-broken'></i> <span>Postagens</span>
                                               <span class="pull-right-container">
                                               <i class="fa fa-angle-left pull-right"></i>
                                               </span>
                                       </a>
                                       <ul class="treeview-menu">
                                           <li><a href="{{ url('arquivos/listagem') }}"><i class="fa fa-circle-o"></i> LISTA</a></li>


                                       </ul>
                                   </li>

@endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
