@extends('adminlte::default')

@section('content')

<div class="container-fluid">

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h3>Atendimentos</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Inicio</th>
                <th>Fim</th>
                <th>Status</th>
                <th>Paciente</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($atendimentos as $ate)
    <tr>
        <td> {{$ate->hora_inicio}}</td>
        <td> {{$ate->hora_fim}}</td>
        <td> {{$ate->status}}</td>
        <td> {{$ate->agendamento->paciente->nome}}</td>



        <td>
            <a href="{{route('atendimentos.edit', ['id'=>$ate->id]) }}"
                class="btn-sm btn-success">Editar</a>
                <a href="{{route('prontuarios.create', ['id'=> $ate->id]) }}"
                    class="btn-sm btn-danger">Prontuario</a>


        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$atendimentos->links()!!}
</div>
@endsection


