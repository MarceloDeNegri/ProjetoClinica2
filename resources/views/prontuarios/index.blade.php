@extends('adminlte::default')

@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h3>Prontuarios</h3>



    <table class="table table-striped table-bordered table-hover" id="prontuarios">
        <thead>
            <tr>
                <th>Médico</th>
                <th>Paciente</th>
                <th>Data Consulta</th>
                <th>Idade</th>
                <th>Peso</th>
                <th>Altura</th>

                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($prontuarios as $pro)
    <tr>
        <td> {{$pro->atendimento->agendamento->userm->name}}</td>
        <td> {{$pro->atendimento->agendamento->user->name}}</td>
        <td> {{date( 'd/m/Y' , strtotime($pro->atendimento->agendamento->dtConsulta))}}</td>
        <td> {{$pro->idade}}</td>
        <td> {{$pro->peso}}</td>
        <td> {{$pro->altura}}</td>



        <td>
                @if (Auth::user()->nivel_acesso == 2 || Auth::user()->nivel_acesso == 0 )
            <a href="{{route('prontuarios.edit', ['id'=>$pro->id]) }}"
                class="btn-sm btn-success">Editar</a>

                @endif
            <a href="{{route('prontuarios.detail', ['id'=> $pro->id]) }}"
                class="btn-sm btn-warning">Detalhes</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$prontuarios->links()!!}
</div>
@endsection
@section('dyn_scripts')
                <script  src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready( function () {
                        $('#prontuarios').DataTable();
                    } );
                </script>
            @endsection
