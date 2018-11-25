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
    <h3>Especializações</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($especializacoes as $esp)
    <tr>
        <td> {{$esp->nome}}</td>
        <td> {{$esp->descricao}}</td>

        <td>
            <a href="{{route('especializacoes.edit', ['id'=>$esp->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="{{route('especializacoes.delete', ['id'=> $esp->id]) }}"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$especializacoes->links()!!}
                <br>
                <a href="{{route('especializacoes.create') }}" class="btn btn-info">Nova Especialização</a>
</div>
@endsection

