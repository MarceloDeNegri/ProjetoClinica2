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
    <h3>Agendamentos</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Data Consulta</th>
                <th>Hora</th>
                <th>Paciente</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($agendamentos as $age)
    <tr>
        <td> {{$age->dtConsulta}}</td>
        <td> {{$age->hora}}</td>
        <td> {{$age->paciente->nome}}</td>



        <td>

            <a href="{{route('agendamentos.edit', ['id'=>$age->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="{{route('agendamentos.delete', ['id'=> $age->id]) }}"
                class="btn-sm btn-danger">Remover</a>
                @if($age->atendimentos->count() == 0)
            <a href="{{route('atendimentos.create', ['id'=> $age->id]) }}"
                class="btn-sm btn-danger">Atender</a>
                @endif

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$agendamentos->links()!!}
</div>
@endsection

