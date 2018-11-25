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
    <h3>Avaliações</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Atendimento</th>
                <th>Consulta</th>
                <th>Equipamentos</th>
                <th>Observação</th>
                <th>Médico</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($avaliacoes as $ava)
    <tr>
        <td> {{$ava->atendente}}</td>
        <td> {{$ava->medico}}</td>
        <td> {{$ava->equipamento}}</td>
        <td> {{$ava->observacao}}</td>
        <td> {{$ava->atendimento->agendamento->userm->name}}</td>

        <td>
            <a href="{{route('avaliacoes.edit', ['id'=> $ava->id]) }}"
                class="btn-sm btn-danger">Editar</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$avaliacoes->links()!!}
</div>
@endsection

