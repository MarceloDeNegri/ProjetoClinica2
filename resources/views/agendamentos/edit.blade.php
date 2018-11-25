@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editar Agendamento</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['agendamentos.update', $agendamento->id],"method"=>'put'])!!}

    <div class="form-group">
            {!!Form::label('dtConsulta', 'Data Consulta:')!!}
            {!!Form::date('dtConsulta',
            $agendamento->dtConsultaForms(),
             ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('condicao', 'Condição:')!!}
        {!!Form::text('condicao', $agendamento->condicao,['class'=>'form-control'])!!}
</div>

<div class="form-group">
        {!!Form::label('paciente_id', 'Paciente:')!!}
        {!!Form::select('paciente_id',
        \App\User::where('nivel_acesso', 3)->where('status', 'A')->orderBy('name')->pluck('name', 'id')->toArray(),$agendamento->paciente_id,
        ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('medico_id', 'Medico:')!!}
    {!!Form::select('medico_id',
    \App\User::where('nivel_acesso', 2)->where('status', 'A')->orderBy('name')->pluck('name', 'id')->toArray(),$agendamento->medico_id,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('convenio_id', 'Convenio:')!!}
    {!!Form::select('convenio_id',
    \App\Convenio::orderBy('nome')->pluck('nome','id')->toArray(),null,
    ['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Editar Consulta', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
