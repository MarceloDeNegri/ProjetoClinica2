@extends('adminlte::default')

@section('content')


<div class="container-fluid">
<td>
        <h3>Detalhes da consulta do paciente {{$prontuarios->atendimento->agendamento->user->name}}  </h3>
        <h5> Nós da Clinica Crescer agradecemos muito o carinho de todos</h5><br>
            <hr>

        Nome: {{$prontuarios->atendimento->agendamento->user->name}}<br>
        <hr>
        Medico: {{$prontuarios->atendimento->agendamento->userm->name}}<br>
        <hr>
        Tipo Sangue: {{$prontuarios->atendimento->agendamento->user->tipoSanguineo}}<br>
        <hr>
        Alergico: {{$prontuarios->atendimento->agendamento->user->alergico}}<br>
        <hr>
        Status: {{$prontuarios->atendimento->agendamento->user->status}}<br>
        <hr>
        Peso: {{$prontuarios->peso}}<br>
        <hr>
        Idade: {{$prontuarios->Idade}}<br>
        <hr>
        Altura: {{$prontuarios->altura}}<br>
        <hr>
        Alimentação: {{$prontuarios->alimentacao}}<br>
        <hr>
        Temperatura: {{$prontuarios->febre}}<br>
        <hr>
        Dores: {{$prontuarios->dores}}<br>
        <hr>
        Marcapasso: {{$prontuarios->atendimento->agendamento->user->marcapasso}}<br>
        <hr>
        Convulsão: {{$prontuarios->atendimento->agendamento->user->convulsao}}<br>
        <hr>
        Tratamento: {{$prontuarios->atendimento->agendamento->user->tratamento}}<br>
        <hr>
        Observação: {{$prontuarios->observacao}}<br>
        <hr>
</td>

        <td>
            <a href="{{url()->previous() }}"
                    class="btn-sm btn-light">Voltar</a>
            <a href="{{route('prontuarios.pdf' , ['id'=> $prontuarios->id])}}"
                    class="btn-sm btn-info">Gerar PDF</a>

        </td>



</div>

@endsection
