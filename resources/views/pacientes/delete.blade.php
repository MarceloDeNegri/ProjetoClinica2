@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o Convenio?</h3>

        Nome: {{$pacientes->nome}}<br>

        Nascimento: {{$pacientes->dtNascimento}}<br>

        Tipo Sangue: {{$pacientes->tipoSanguineo}}<br>

        Alergico: {{$pacientes->alergico}}<br>

        Status: {{$pacientes->status}}<br>

        Responsavel: {{$pacientes->responsavel->user['name']}}<br>
</td>

        <td>
            <a href="{{route('pacientes.destroy', ['id'=> $pacientes->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('pacientes', ['id'=>$pacientes->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
