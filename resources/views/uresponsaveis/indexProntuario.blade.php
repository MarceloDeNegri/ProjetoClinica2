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
    <h3>Prontuarios</h3>

    <div class="box">
            <div class="box-header">
            <form action="{{ route('prontuarios.search' )}}" method="POST" class="form form-inline">
                {!! csrf_field() !!}
                    <input type="text" name="idade" class="form-control" placeholder="Idade">
                    <input type="text" name="altura" class="form-control" placeholder="Altura">
                    <input type="text" name="peso" class="form-control" placeholder="Peso">


                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </form>
    <hr>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Data Consulta</th>
                <th>Idade</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Responsavel</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($prontuarios as $pro)
    <tr>
        <td> {{$pro->atendimento->agendamento->paciente->nome}}</td>
        <td> {{$pro->atendimento->agendamento->dtConsulta}}</td>
        <td> {{$pro->idade}}</td>
        <td> {{$pro->peso}}</td>
        <td> {{$pro->altura}}</td>
        <td> {{$pro->atendimento->agendamento->paciente->responsavel->user->name}}</td>


    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$prontuarios->links()!!}
</div>
@endsection

