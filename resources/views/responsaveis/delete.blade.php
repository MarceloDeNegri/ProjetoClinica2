@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o Responsavel? </h3>
        <h5> Removendo {{$responsaveis->nome}} você irá automaticamente remover<br>
            todos seus dados e dados dependentes dele!</h5><br>
            <hr>
        Nome: {{$responsaveis->nome}}<br>
        <hr>
        Telefone: {{$responsaveis->user->telefone}}<br>
        <hr>
        CPF: {{$responsaveis->user->cpf}}<br>


</td>
<hr>

        <td>
            <a href="{{route('responsaveis.destroy', ['id'=> $responsaveis->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('responsaveis', ['id'=>$responsaveis->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
