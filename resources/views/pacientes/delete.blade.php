@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Tem certeza que deseja Remover o Paciente?</h3>
        <h5> Removendo {{$pacientes->nome}} você irá automaticamente remover<br>
            todos seus dados e dados dependentes dele!</h5><br>
            <hr>

        Nome: {{$pacientes->nome}}<br>
        <hr>
        Nascimento: {{$pacientes->dtNascimento}}<br>
        <hr>
        Tipo Sangue: {{$pacientes->tipoSanguineo}}<br>
        <hr>
        Alergico: {{$pacientes->alergico}}<br>
        <hr>
        Status: {{$pacientes->status}}<br>
        <hr>
        Responsavel: {{$pacientes->responsavel->user['name']}}<br>
        <hr>
</td>

        <td>
            <a href="{{route('pacientes.destroy', ['id'=> $pacientes->id]) }}"
                        class="btn-sm btn-danger">Remover</a>
            <a href="{{route('pacientes', ['id'=>$pacientes->id]) }}"
                         class="btn-sm btn-success">Cancelar</a>

        </td>



</div>

@endsection
