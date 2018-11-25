@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Avaliação da Consulta</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'avaliacoes.store'])!!}

<div class="form-group" >
    {!!Form::label('atendente', 'Como você descreveria seu atendimento na clinica:' )!!}
    {!!Form::select('atendente',
    array ('Ruim' =>'Ruim' , 'Medio'=> 'Medio',  'Bom'=> 'Bom', 'Otimo'=> 'Otimo'  ),
    'Selecione uma opção',
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('medico', 'Como você descreveria o atendimento Medico:')!!}
    {!!Form::select('medico',
    array ('Ruim' =>'Ruim' , 'Medio'=> 'Medio',  'Bom'=> 'Bom', 'Otimo'=> 'Otimo'  ),
    'Selecione uma opção',
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
        {!!Form::label('equipamento', 'Como você descreveria os equipamentos utilizados na consulta:')!!}
        {!!Form::select('equipamento',
        array ('Ruim' =>'Ruim' , 'Medio'=> 'Medio',  'Bom'=> 'Bom', 'Otimo'=> 'Otimo'  ),
        'Selecione uma opção',
        ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
            {!!Form::label('observacao', 'Observação:')!!}
            {!!Form::textarea('observacao', null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
            {!! Form::hidden('atendimento_id', $atendimento->id) !!}
    </div>
        <div class="form-group">
           {!!Form::submit('Avaliar', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
    @endsection

