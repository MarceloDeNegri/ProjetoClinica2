@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o Agendamento?</h3>

        Data Consulta: {{$agendamentos->dtConsulta}}<br>

        Paciente: {{$agendamentos->paciente->nome}}<br>


</td>

        <td>
            <a href="{{route('agendamentos.destroy', ['id'=> $agendamentos->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('agendamentos', ['id'=>$agendamentos->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
