@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o(a) Atendente?</h3>

        Nome: {{$atendentes->user->name}}<br>

        Numero: {{$atendentes->cracha}}<br>

        Admissão: {{$atendentes->dtAdmissao}}<br>

        Telefone: {{$atendentes->user->telefone}}<br>
</td>

        <td>
            <a href="{{route('atendentes.destroy', ['id'=> $atendentes->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('atendentes', ['id'=>$atendentes->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
