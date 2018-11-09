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
    <h3>Convenios</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Numero</th>
                <th>Plano</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($convenios as $con)
    <tr>
        <td> {{$con->nome}}</td>
        <td> {{$con->numero}}</td>
        <td> {{$con->plano}}</td>
        <td> {{$con->valor}}</td>

        <td>
            <a href="{{route('convenios.edit', ['id'=>$con->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="{{route('convenios.delete', ['id'=> $con->id]) }}"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$convenios->links()!!}
</div>
@endsection

