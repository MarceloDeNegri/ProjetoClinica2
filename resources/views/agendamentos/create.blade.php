@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Agendamento</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'agendamentos.store'])!!}


    <div class="form-group">
            {!!Form::label('dtConsulta', 'Data Consulta:')!!}
            {!!Form::date('dtConsulta',
            '2017-05-18 00:00:00',
             ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('valor', 'Condição:')!!}
        {!!Form::number('valor', null,['class'=>'form-control'])!!}
</div>
    <div class="form-group">
        {!!Form::label('condicao', 'Condição:')!!}
        {!!Form::text('condicao', null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
        {!!Form::label('paciente_id', 'Paciente:')!!}
        {!!Form::select('paciente_id',
        \App\Paciente::orderBy('nome')->pluck('nome','id')->toArray(),null,
        ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('medico_id', 'Medico:')!!}
    {!!Form::select('medico_id',
    \App\Medico::orderBy('id')->pluck('user_id','id')->toArray(),null,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('convenio_id', 'Convenio:')!!}
    {!!Form::select('convenio_id',
    \App\Convenio::orderBy('nome')->pluck('nome','id')->toArray(),null,
    ['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Agendar Consulta', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
