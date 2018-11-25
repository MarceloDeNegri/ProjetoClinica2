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
    <h3>Paciente</h3>


    <table class="table table-striped table-bordered table-hover" id="usuario">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach ($users as $u)
    <tr>
        <td> {{$u->name}}</td>
        <td> {{$u->email}}</td>
        <td> {{$u->telefone}}</td>
        <td> {{date( 'd/m/Y' , strtotime($u->dtNascimento))}}</td>
        <td> {{$u->cpf}}</td>

        <td>
            <a href="{{route('users.edit', ['id'=>$u->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="{{route('users.delete', ['id'=> $u->id]) }}"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>

    </table>
                {!!$users->links()!!}
                <br>
                <a href="{{route('users.createPaciente') }}" class="btn btn-info">Novo Paciente</a>
</div>
@endsection

@section('dyn_scripts')
                <script  src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready( function () {
                        $('#usuario').DataTable();
                    } );
                </script>
            @endsection

