@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Paciente</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['pacientes.update', $paciente->id],"method"=>'put'])!!}



        <div class="form-group">
            {!!Form::label('nome', 'Nome:')!!}
            {!!Form::text('nome', $paciente->nome,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
            {!!Form::label('dtNascimento', 'Data Nascimento:')!!}
            {!!Form::date('dtNascimento',
            '2017-05-18 00:00:00',
             ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('tipoSanguineo', 'Tipo Sanguineo:')!!}
        {!!Form::select('tipoSanguineo',
        array ('A'=>'A' , 'AB'=>'AB', 'B'=>'B', 'O-'=>'O-', 'O+'=>'O+' ),
        'A',
        ['class'=>'form-control'])!!}
</div>
    <div class="form-group">
        {!!Form::label('alergico', 'Alergico:')!!}
        {!!Form::textarea('alergico', $paciente->alergico,['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('status', 'Status:' )!!}
    {!!Form::select('status',
    array ('A' =>'Ativo' , 'I'=> 'Inativo' ),
    'A',
    ['class'=>'form-control'])!!}
</div>

<div class="form-group">
        {!!Form::label('responsavel_id', 'Responsavel:')!!}
        {!!Form::select('responsavel_id',
        \App\Responsavel::orderBy('id')->pluck('user_id','id')->toArray(),null,
        ['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Editar paciente', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
