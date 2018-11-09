@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o Convenio?</h3>

        Nome: {{$convenios->nome}}<br>

        Numero: {{$convenios->numero}}<br>

        Plano: {{$convenios->plano}}<br>

        Valor: {{$convenios->valor}}<br>
</td>

        <td>
            <a href="{{route('convenios.destroy', ['id'=> $convenios->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('convenios', ['id'=>$convenios->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
