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
    <h3>Usuarios</h3>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($users as $u)
    <tr>
        <td> {{$u->name}}</td>
        <td> {{$u->email}}</td>
        <td> {{$u->telefone}}</td>


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
</div>
@endsection

