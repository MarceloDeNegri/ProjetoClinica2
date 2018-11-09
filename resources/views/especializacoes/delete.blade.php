@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover a Especialização?</h3>

        Nome: {{$especializacoes->nome}}<br>

        Numero: {{$especializacoes->descricao}}<br>

</td>

        <td>
            <a href="{{route('especializacoes.destroy', ['id'=> $convenios->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('convenios', ['id'=>$convenios->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
