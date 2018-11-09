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
    <h3>Pacientes</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Alergico</th>
                <th>Status</th>
                <th>Responsavel</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($pacientes as $paci)
    <tr>
        <td> {{$paci->nome}}</td>
        <td> {{$paci->dtNascimento}}</td>
        <td> {{$paci->alergico}}</td>
        <td> {{$paci->status}}</td>
        <td> {{$paci->responsavel->user->name}}</td>


        <td>
            <a href="{{route('pacientes.edit', ['id'=>$paci->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="{{route('pacientes.delete', ['id'=> $paci->id]) }}"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$pacientes->links()!!}
</div>
@endsection

