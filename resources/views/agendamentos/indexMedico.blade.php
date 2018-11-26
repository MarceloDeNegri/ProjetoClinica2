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
                <th>Médico</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($agendamentos as $age)
    <tr>
        <td> {{date( 'd/m/Y' , strtotime($age->dtConsulta))}}</td>
        <td> {{$age->hora}}</td>
        <td> {{$age->user->name}}</td>
        <td> {{$age->userm->name}}</td>

        <td>


                @if (Auth::user()->nivel_acesso == 2 )
                @if($age->condicao == 'Cancelado')
                <center><h5>Agendamento Cancelado</h5></center>
                @elseif($age->atendimentos->count() == 0)
            <a href="{{route('atendimentos.create', ['id'=> $age->id]) }}"
                class="btn-sm btn-danger">Atender</a>
                @else
                <center><h5>Atendimento efetuado</h5></center>
                @endif
                @endif




        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$agendamentos->links()!!}
</div>
@endsection

