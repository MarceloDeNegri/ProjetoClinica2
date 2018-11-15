@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Convenio</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'users.store'])!!}


<div class="form-group">
        {!!Form::label('name', 'Nome:')!!}
        {!!Form::text('name', null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('email', 'email:')!!}
    {!!Form::text('email', null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('password', 'Senha:')!!}
    {!!Form::password('password',['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('telefone', 'Telefone:')!!}
    {!!Form::text('telefone', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('cpf', 'CPF:')!!}
    {!!Form::text('cpf', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('rg', 'RG:')!!}
    {!!Form::text('rg', null,['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('nivel_acesso', 'Nivel de Acesso:' )!!}
    {!!Form::select('nivel_acesso',
    array (0 =>'Admin' , 1=> 'Atendente',  2=> 'Medico', 3=> 'Responsavel'  ),
    3,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('dtNascimento', 'Data Nascimento:')!!}
    {!!Form::date('dtNascimento',
    '2017-05-18 00:00:00',
     ['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('status', 'Status:' )!!}
    {!!Form::select('status',
    array ('A' =>'Ativo' , 'I'=> 'Inativo' ),
    'A',
    ['class'=>'form-control'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Criar Usuario', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
