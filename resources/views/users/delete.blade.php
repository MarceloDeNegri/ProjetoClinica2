@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o Usuario?</h3>

        Nome: {{$users->name}}<br>

        Email: {{$users->email}}<br>

        Telefone: {{$users->telefone}}<br>

        RG: {{$users->rg}}<br>
</td>

        <td>
            <a href="{{route('users.destroy', ['id'=> $users->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('users', ['id'=>$users->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
