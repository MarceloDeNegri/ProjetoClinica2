<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Acessos</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Principal</span></a></li>
            <li><a href="{{ url('') }}"><i class='fa fa-chain-broken'></i> <span>Avaliação</span></a></li>


            <li class="treeview">
                    <a href="#">
                            <i class="fa fa-user"></i> <span>Relatorios</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> HTML</a></li>
                        <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> PDF</a></li>
                        <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> PLANILHAS</a></li>
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
                            <li><a href="{{ url('pacientes') }}"><i class="fa fa-circle-o"></i> PACIENTES</a></li>
                            <li><a href="{{ url('medicos') }}"><i class="fa fa-circle-o"></i> MEDICOS</a></li>
                            <li><a href="{{ url('atendentes') }}"><i class="fa fa-circle-o"></i> ATENDENTES</a></li>
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

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
